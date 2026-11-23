<?php

namespace Tests\Feature;

use App\Models\Portfolio;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CroAuditTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    public function test_home_implements_cro_hero_apps_and_pymes_without_seo_pollution(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        // App-focused Hero
        $response->assertSee('Apps de precisión');
        $response->assertSee('Descargar Apps en Google Play');
        $response->assertSee('¿Necesitas un sitio web para tu negocio?');
        $response->assertDontSee('sf-core-v1.0.js');

        // Local-First & friction reducers
        $response->assertSee('Local-First');
        $response->assertSee('Gratis · Sin registro · Funciona offline');

        // B2B PyMEs section
        $response->assertSee('Sitios Web PyMEs');
        $response->assertSee('7 a 14 días');

        // AI Agent cards hide technical metadata and show quick prompts
        $response->assertDontSee('Modo:');
        $response->assertDontSee('// Proveedor:');
        $response->assertSee('¿Cómo funciona el modo paso a paso?');
        $response->assertSee('¿Cuánto cuesta y qué incluye un sitio web para mi PyME?');

        // No embedded legal documents in Home DOM
        $response->assertDontSee('legal-content-privacy-');
        $response->assertDontSee('legal-content-terms-');
        $response->assertDontSee('openLegalModal');

        // General privacy notice linked
        $response->assertSee(route('legal.privacy-general'));
    }

    public function test_dedicated_app_and_pyme_pages_render_correctly(): void
    {
        $this->get('/calculadora-matricial')
            ->assertStatus(200)
            ->assertSee('Calculadora Científica');

        $this->get('/simulador-teoria-juegos')
            ->assertStatus(200)
            ->assertSee('Simulador de');

        $this->get('/desarrollo-web-pymes')
            ->assertStatus(200)
            ->assertSee('Sitios web para micro y PyMEs');
    }

    public function test_legal_pages_have_noindex_and_unified_company_info(): void
    {
        $legalRoutes = [
            '/aviso-privacidad',
            '/privacidad-calculadora',
            '/terminos-calculadora',
            '/privacidad-simulador',
            '/terminos-simulador',
        ];

        foreach ($legalRoutes as $url) {
            $response = $this->get($url);
            $response->assertStatus(200);
            $response->assertSee('<meta name="robots" content="noindex, nofollow">', false);
            $response->assertSee('Solutions Factory Studio S.A.S.');
            $response->assertSee('contacto@solutions-factory-studio.app');
        }

        $portfolio = Portfolio::first();
        $this->get(route('portfolio.privacy', $portfolio))
            ->assertStatus(200)
            ->assertSee('<meta name="robots" content="noindex, nofollow">', false);

        $this->get(route('portfolio.terms', $portfolio))
            ->assertStatus(200)
            ->assertSee('<meta name="robots" content="noindex, nofollow">', false);
    }
}
