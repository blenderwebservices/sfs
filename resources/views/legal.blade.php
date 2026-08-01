<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Solutions Factory Studio</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f4f6f9',
                            100: '#e8edf3',
                            500: '#1b3b6f',
                            600: '#13294d',
                            700: '#0b192e',
                            accent: '#218380',
                            warm: '#ff715b'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                        mono: ['Fira Code', 'monospace']
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;600&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .grid-bg {
            background-image: radial-gradient(#1b3b6f 0.75px, transparent 0.75px);
            background-size: 24px 24px;
        }
        .neubox {
            background: #ffffff;
            border: 2px solid #13294d;
            box-shadow: 4px 4px 0px #13294d;
        }
        .legal-content h1 { font-size: 1.5rem; font-weight: 800; margin-bottom: 1rem; color: #0b192e; }
        .legal-content h2 { font-size: 1.25rem; font-weight: 800; margin-bottom: 0.75rem; color: #13294d; margin-top: 1.5rem; }
        .legal-content h3 { font-size: 1.125rem; font-weight: 700; margin-bottom: 0.5rem; color: #1b3b6f; margin-top: 1.25rem; }
        .legal-content p { margin-bottom: 1rem; line-height: 1.6; }
        .legal-content ul { list-style-type: disc; padding-left: 1.5rem; margin-bottom: 1rem; }
        .legal-content ol { list-style-type: decimal; padding-left: 1.5rem; margin-bottom: 1rem; }
        .legal-content li { margin-bottom: 0.5rem; }
        .legal-content strong { font-weight: 700; color: #0b192e; }
        .legal-content a { color: #218380; text-decoration: underline; text-underline-offset: 2px; }
    </style>
</head>
<body class="bg-brand-50 text-brand-700 font-sans antialiased grid-bg min-h-screen py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="/" class="inline-flex items-center gap-2 mb-8 text-brand-600 hover:text-brand-accent font-semibold text-sm transition-colors">
            <i class="fa-solid fa-arrow-left"></i> Volver a Inicio
        </a>
        
        <div class="neubox p-8 sm:p-12">
            <div class="border-b-2 border-brand-100 pb-6 mb-8 text-center sm:text-left">
                <h1 class="text-3xl font-extrabold text-brand-700 tracking-tight">{{ $title }}</h1>
                <p class="text-brand-500 font-mono text-sm mt-2">Documento público / {{ $portfolio->version ?: 'Lanzamiento' }}</p>
            </div>
            
            <div class="legal-content text-brand-600">
                {!! $content !!}
            </div>
        </div>
        
        <div class="mt-12 text-center text-xs font-mono text-brand-700 bg-brand-50/90 inline-block p-2 border border-brand-200">
            &copy; 2026 Solutions Factory Studio S.A.S.
        </div>
    </div>
</body>
</html>
