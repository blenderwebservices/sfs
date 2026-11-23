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
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;600&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    /* Estilo Neo-Brutalismo / Technical Clean */
    .neubox {
        background: #ffffff;
        border: 2px solid #13294d;
        box-shadow: 4px 4px 0px #13294d;
        transition: all 0.2s ease;
    }
    .neubox:hover {
        transform: translate(-2px, -2px);
        box-shadow: 6px 6px 0px #13294d;
    }
    .neubtn {
        background: #1b3b6f;
        color: #ffffff;
        border: 2px solid #13294d;
        box-shadow: 3px 3px 0px #13294d;
        transition: all 0.1s ease;
    }
    .neubtn:hover {
        background: #218380;
        transform: translate(-1px, -1px);
        box-shadow: 4px 4px 0px #13294d;
    }
    .neubtn:active {
        transform: translate(2px, 2px);
        box-shadow: 1px 1px 0px #13294d;
    }
    .grid-bg {
        background-image: radial-gradient(#1b3b6f 0.75px, transparent 0.75px);
        background-size: 24px 24px;
    }
</style>
