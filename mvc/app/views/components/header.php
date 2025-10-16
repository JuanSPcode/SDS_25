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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    <script>
        // Esperar a que el DOM esté listo
        document.addEventListener('DOMContentLoaded', function() {
            // Función para abrir el modal de registro
            function abrirModalRegistro(e) {
                e.preventDefault();
                
                <?php
                // Verificar si el usuario ya está registrado
                $visitaModelHeader = new \app\models\Visita();
                $usuarioActualHeader = $visitaModelHeader->getUsuarioActual();
                
                if ($usuarioActualHeader): ?>
                    // Usuario ya registrado - mostrar información
                    Swal.fire({
                        title: '¡Bienvenido de nuevo!',
                        icon: 'success',
                        html: `
                            <div style="text-align: left;">
                                <p style="font-size: 1.1em; margin-bottom: 10px;">
                                    <strong><?php echo htmlspecialchars($usuarioActualHeader['nombre']); ?></strong>
                                </p>
                                <p style="margin-bottom: 8px;">
                                    Has visitado esta página <strong><?php echo $usuarioActualHeader['visitas']; ?></strong> veces.
                                </p>
                                <p style="font-size: 0.9em; color: #666;">
                                    Primera visita: <?php echo date('d/m/Y H:i', strtotime($usuarioActualHeader['f_registro'])); ?>
                                </p>
                            </div>
                        `,
                        confirmButtonText: '<i class="fas fa-check"></i> Entendido',
                        confirmButtonColor: '#3b82f6',
                        showCloseButton: true
                    });
                <?php else: ?>
                    // Usuario NO registrado - mostrar formulario
                    Swal.fire({
                        title: '<i class="fas fa-user-plus"></i> Registra tu visita',
                        html: `
                            <div style="text-align: left;">
                                <p style="margin-bottom: 15px; color: #666;">
                                    Ingresa tu nombre para que podamos identificarte en futuras visitas.
                                </p>
                                <div style="margin-bottom: 15px;">
                                    <label style="display: block; margin-bottom: 5px; font-weight: 600;">
                                        <i class="fas fa-signature"></i> Tu nombre
                                    </label>
                                    <input 
                                        type="text" 
                                        id="swal-nombre" 
                                        class="swal2-input" 
                                        placeholder="Ingresa tu nombre"
                                        style="width: 100%; margin: 0;"
                                        required
                                        minlength="2"
                                        maxlength="100">
                                </div>
                                <p style="font-size: 0.85em; color: #888;">
                                    Este nombre se usará para identificarte en futuras visitas
                                </p>
                            </div>
                        `,
                        showCancelButton: true,
                        confirmButtonText: '<i class="fas fa-check"></i> Registrar',
                        cancelButtonText: '<i class="fas fa-times"></i> Cancelar',
                        confirmButtonColor: '#3b82f6',
                        cancelButtonColor: '#6b7280',
                        showCloseButton: true,
                        focusConfirm: false,
                        preConfirm: () => {
                            const nombre = document.getElementById('swal-nombre').value;
                            if (!nombre || nombre.trim() === '') {
                                Swal.showValidationMessage('Por favor ingresa tu nombre');
                                return false;
                            }
                            if (nombre.length < 2) {
                                Swal.showValidationMessage('El nombre debe tener al menos 2 caracteres');
                                return false;
                            }
                            return { nombre: nombre };
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Crear formulario y enviarlo
                            const form = document.createElement('form');
                            form.method = 'POST';
                            form.action = '/mvc/public/contacto';
                            
                            const inputNombre = document.createElement('input');
                            inputNombre.type = 'hidden';
                            inputNombre.name = 'nombre_visitante';
                            inputNombre.value = result.value.nombre;
                            
                            const inputSubmit = document.createElement('input');
                            inputSubmit.type = 'hidden';
                            inputSubmit.name = 'registrar_visita';
                            inputSubmit.value = '1';
                            
                            form.appendChild(inputNombre);
                            form.appendChild(inputSubmit);
                            document.body.appendChild(form);
                            form.submit();
                        }
                    });
                <?php endif; ?>
            }
            
            // Agregar evento al botón del navbar (por ID)
            const btnRegistrar = document.getElementById('registrar');
            if (btnRegistrar) {
                btnRegistrar.addEventListener('click', abrirModalRegistro);
            }
            
            // Agregar evento a todos los botones con la clase (múltiples botones)
            const botonesRegistrar = document.querySelectorAll('.btn-registrar-modal');
            botonesRegistrar.forEach(btn => {
                btn.addEventListener('click', abrirModalRegistro);
            });
        });
    </script>

 