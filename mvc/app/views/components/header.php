<?php
// Incluir tracking de visitas automático
require_once __DIR__ . '/../../init_tracking.php';
?>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/logo.png">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        const html = document.querySelector('html');
        console.log(html);

        html.setAttribute("data-theme", "halloween");
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        *{
            font-family: "Montserrat", sans-serif;
        }
        
        /* Gradiente radial para efectos de aura */
        .bg-gradient-radial {
            background: radial-gradient(circle, var(--tw-gradient-stops));
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <title><?php echo isset($title) ? $title : "SDS 25"; ?></title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>

 