# Plan de Implementación — Auditoría CRO v1

Aplicación integral de las recomendaciones críticas, mejoras recomendadas y preservación de aciertos definidas en [`docs/auditoria-cro-v1.md`](file:///Users/franciscogomezbarragan/Herd/sfs/docs/auditoria-cro-v1.md).

## Objetivos
1. **Objetivo Primario (Apps Móviles):** Convertir la portada en un embudo directo hacia la descarga de *Calculadora Científica Matricial* y *Simulador de Teoría de Juegos No Cooperativos* en Google Play, destacando el diferenciador *Local-First*.
2. **Objetivo Secundario (B2B Micro y PyMEs):** Crear una oferta comercial clara y separada para sitios web de micro y PyMEs en la sección `#pymes` y en la landing dedicada `/desarrollo-web-pymes`.
3. **SEO & Limpieza Legal:** Eliminar los textos legales incrustados en el DOM de la portada, moverlos a rutas dedicadas con `noindex`, publicar el Aviso de Privacidad general (`/aviso-privacidad`) y unificar la razón social (*Solutions Factory Studio S.A.S.*) y correo de contacto (`contacto@solutions-factory-studio.app`).
4. **CRO & Páginas Dedicadas:** Crear páginas dedicadas para cada app (`/calculadora-matricial` y `/simulador-teoria-juegos`), optimizar las tarjetas de Agentes IA ocultando metadatos técnicos y agregando preguntas rápidas clicables, y reemplazar "Iniciar Sesión" del header por un CTA de conversión.

## Cambios Propuestos

### 1. Rutas y Controladores (`routes/web.php`)
- Mantener `/` sirviendo `landing.blade.php` con `$portfolios` y `$agents`.
- Agregar rutas SEO dedicadas:
  - `GET /calculadora-matricial` (`apps.calculator`)
  - `GET /simulador-teoria-juegos` (`apps.game-theory`)
  - `GET /desarrollo-web-pymes` (`services.pymes`)
- Agregar rutas legales con `noindex`:
  - `GET /aviso-privacidad` (`legal.privacy-general`)
  - `GET /privacidad-calculadora`, `GET /terminos-calculadora`, `GET /privacidad-simulador`, `GET /terminos-simulador`
  - Mantener `/portfolio/{portfolio}/privacy` y `/portfolio/{portfolio}/terms`.

### 2. Vistas Legales (`resources/views/legal.blade.php`)
- Agregar `<meta name="robots" content="noindex, nofollow">`.
- Unificar razón social (*Solutions Factory Studio S.A.S.*) y correo (`contacto@solutions-factory-studio.app`).

### 3. Portada Principal (`resources/views/landing.blade.php`)
- Navbar sin "Iniciar Sesión", con CTA **"Descargar Apps"** y enlace **"Sitios Web PyMEs"**.
- Hero centrado en las apps con mockup interactivo de teléfono, CTA primario a `#portfolio` y CTA secundario a `#pymes`.
- Beneficios tangibles orientados al usuario final y diferenciador *Local-First*.
- Tarjetas de apps con mini-previews de UI, micro-indicador *"Gratis · Sin registro · Funciona offline"*, badge de Google Play y enlaces a páginas dedicadas.
- Eliminación de bloques legales ocultos del DOM y modal legal.
- Sección B2B `#pymes` separada con lenguaje comercial directo.
- Agentes IA sin metadatos técnicos (`model`/`provider`) y con preguntas rápidas clicables.
- Bloque de retención/novedades, botón WhatsApp Business y Aviso de Privacidad bajo el botón de envío.
- Footer con enlace a Aviso de Privacidad general e "Iniciar Sesión".

### 4. Páginas Dedicadas
- `resources/views/apps/calculator.blade.php` (`/calculadora-matricial`)
- `resources/views/apps/game-theory.blade.php` (`/simulador-teoria-juegos`)
- `resources/views/services/pymes.blade.php` (`/desarrollo-web-pymes`)

### 5. Seeder y Pruebas
- Actualizar `database/seeders/DatabaseSeeder.php` con contenido legal unificado.
- Agregar pruebas de feature en `tests/Feature/CroAuditTest.php`.
