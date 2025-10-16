<!DOCTYPE html>
<html lang="es" class="h-full">
<head><?php include 'components/header.php'?></head>
<body class="h-full flex flex-col">
    <!-- Navbar fijo arriba -->
    <nav class="flex-shrink-0">
        <?php include 'components/nav.php'; ?>
    </nav>

    <!-- Espaciador para compensar navbar fijo -->
    <div class="my-8"></div>

    <!-- Main content que crece para empujar el footer -->
    <div class="flex-grow bg-base-200">
        <main class="container mx-auto px-4 py-8 ">
            
            <!-- Hero Section -->
            <div id="hero" class="hero min-h-[450px] bg-base-100 rounded-2xl shadow-xl mb-8 overflow-hidden">
                <div class="hero-content flex-col lg:flex-row-reverse gap-8">
                    <div class="flex-1 flex items-center justify-center p-8">
                        <img src="./img/logo.png" class="max-w-sm w-full rounded-lg shadow-2xl hover:scale-105 transition-transform duration-300" alt="Logo ASEIS" />
                    </div>
                    <div class="flex-1">
                        <div class="badge badge-primary badge-lg mb-4">13 - 17 de Octubre 2025</div>
                        <h1 id="hero-title" class="text-5xl font-bold text-base-content mb-4">Semana de Sistemas 2025</h1>
                        <p class="text-lg text-base-content/80 mb-4">
                            Bienvenido al blog oficial de la <span class="font-bold text-primary">Semana de Sistemas 2025</span>, 
                            un evento organizado por ASEIS (Asociación de Estudiantes de Ingeniería en Sistemas).
                        </p>
                        <p class="text-base text-base-content/70 mb-6">
                            Durante cinco días, participaremos en ponencias magistrales, talleres prácticos, 
                            competencias de programación y actividades recreativas que fortalecerán nuestro 
                            conocimiento y habilidades profesionales.
                        </p>
                        <a href="#sobre-evento" class="btn btn-primary btn-lg">
                            Conoce más
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sobre el Evento -->
            <div id="sobre-evento" class="mb-8">
                <h2 class="text-3xl font-bold text-base-content mb-6 text-center">¿Qué es la Semana de Sistemas?</h2>
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <p class="text-lg text-base-content/80 leading-relaxed">
                            La <strong>Semana de Sistemas 2025</strong> es un evento académico y cultural organizado por la 
                            Asociación de Estudiantes de Ingeniería en Sistemas (ASEIS) de la Universidad de El Salvador, 
                            Facultad Multidisciplinaria Oriental. Este evento tiene como objetivo principal fortalecer 
                            el conocimiento técnico y las habilidades prácticas de los estudiantes mediante:
                        </p>
                        
                        <div class="grid md:grid-cols-2 gap-6 mt-6">
                            <div class="flex items-start gap-3">
                                <div class="badge badge-primary badge-lg">1</div>
                                <div>
                                    <h3 class="font-bold text-lg text-base-content">Ponencias Magistrales</h3>
                                    <p class="text-base-content/70">Conferencias dictadas por profesionales destacados del sector tecnológico.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="badge badge-primary badge-lg">2</div>
                                <div>
                                    <h3 class="font-bold text-lg text-base-content">Talleres Prácticos</h3>
                                    <p class="text-base-content/70">Sesiones hands-on para desarrollar habilidades técnicas específicas.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="badge badge-primary badge-lg">3</div>
                                <div>
                                    <h3 class="font-bold text-lg text-base-content">Competencias</h3>
                                    <p class="text-base-content/70">Desafíos de programación y hackathons para poner a prueba tus conocimientos.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-3">
                                <div class="badge badge-primary badge-lg">4</div>
                                <div>
                                    <h3 class="font-bold text-lg text-base-content">Actividades Recreativas</h3>
                                    <p class="text-base-content/70">Eventos sociales y deportivos para fortalecer la comunidad estudiantil.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Estadísticas -->
            <div class="stats stats-vertical lg:stats-horizontal shadow-xl w-full bg-base-100 mb-8">
                <div class="stat">
                    <div class="stat-figure text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <div class="stat-title">Duración del Evento</div>
                    <div class="stat-value text-primary">5 Días</div>
                    <div class="stat-desc">13 - 17 de Octubre</div>
                </div>
                
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="stat-title">Actividades</div>
                    <div class="stat-value text-secondary">18+</div>
                    <div class="stat-desc">Ponencias y talleres</div>
                </div>
                
                <div class="stat">
                    <div class="stat-figure text-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <div class="stat-title">Participantes</div>
                    <div class="stat-value text-accent">200+</div>
                    <div class="stat-desc">Estudiantes esperados</div>
                </div>
            </div>

            <!-- Navegación a Secciones del Blog -->
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-base-content mb-6 text-center">Explora el Blog por Día</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Día 1 - Lunes -->
                    <a href="../public/lunes" class="card bg-gradient-to-br from-blue-500 to-blue-700 text-white shadow-xl hover:shadow-2xl transition-all hover:scale-105">
                        <div class="card-body">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="card-title text-2xl">Lunes 13</h2>
                                <div class="badge badge-lg bg-white text-blue-700">Día 1</div>
                            </div>
                            <p class="text-white/90 mb-2 font-semibold">Inauguración y Hackathon</p>
                            <p class="text-white/70 text-sm">Bienvenida, 2 ponencias magistrales y inicio del Hackathon</p>
                            <div class="card-actions justify-end mt-4">
                                <button class="btn btn-ghost text-white">Ver más →</button>
                            </div>
                        </div>
                    </a>

                    <!-- Día 2 - Martes -->
                    <a href="../public/martes" class="card bg-gradient-to-br from-green-500 to-green-700 text-white shadow-xl hover:shadow-2xl transition-all hover:scale-105">
                        <div class="card-body">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="card-title text-2xl">Martes 14</h2>
                                <div class="badge badge-lg bg-white text-green-700">Día 2</div>
                            </div>
                            <p class="text-white/90 mb-2 font-semibold">Día de Talleres</p>
                            <p class="text-white/70 text-sm">4 talleres prácticos de 8:00 AM a 5:00 PM en Cómputo B</p>
                            <div class="card-actions justify-end mt-4">
                                <button class="btn btn-ghost text-white">Ver más →</button>
                            </div>
                        </div>
                    </a>

                    <!-- Día 3 - Miércoles -->
                    <a href="../public/miercoles" class="card bg-gradient-to-br from-purple-500 to-purple-700 text-white shadow-xl hover:shadow-2xl transition-all hover:scale-105">
                        <div class="card-body">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="card-title text-2xl">Miércoles 15</h2>
                                <div class="badge badge-lg bg-white text-purple-700">Día 3</div>
                            </div>
                            <p class="text-white/90 mb-2 font-semibold">Día Deportivo</p>
                            <p class="text-white/70 text-sm">Torneo de Fútbol 11 en la Cancha de la Biblioteca</p>
                            <div class="card-actions justify-end mt-4">
                                <button class="btn btn-ghost text-white">Ver más →</button>
                            </div>
                        </div>
                    </a>

                    <!-- Día 4 - Jueves -->
                    <a href="../public/jueves" class="card bg-gradient-to-br from-orange-500 to-orange-700 text-white shadow-xl hover:shadow-2xl transition-all hover:scale-105">
                        <div class="card-body">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="card-title text-2xl">Jueves 16</h2>
                                <div class="badge badge-lg bg-white text-orange-700">Día 4</div>
                            </div>
                            <p class="text-white/90 mb-2 font-semibold">Feria y Cultura</p>
                            <p class="text-white/70 text-sm">Feria de Logros y Comelona de Pupusas en Plaza Minerva</p>
                            <div class="card-actions justify-end mt-4">
                                <button class="btn btn-ghost text-white">Ver más →</button>
                            </div>
                        </div>
                    </a>

                    <!-- Día 5 - Viernes -->
                    <a href="../public/viernes" class="card bg-gradient-to-br from-red-500 to-red-700 text-white shadow-xl hover:shadow-2xl transition-all hover:scale-105">
                        <div class="card-body">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="card-title text-2xl">Viernes 17</h2>
                                <div class="badge badge-lg bg-white text-red-700">Día 5</div>
                            </div>
                            <p class="text-white/90 mb-2 font-semibold">Clausura y Celebración</p>
                            <p class="text-white/70 text-sm">Bingo, Torneo de Videojuegos y Fiesta de Clausura</p>
                            <div class="card-actions justify-end mt-4">
                                <button class="btn btn-ghost text-white">Ver más →</button>
                            </div>
                        </div>
                    </a>

                    <!-- Mi Información -->
                    <a href="../public/contacto" class="card bg-gradient-to-br from-gray-700 to-gray-900 text-white shadow-xl hover:shadow-2xl transition-all hover:scale-105">
                        <div class="card-body">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="card-title text-2xl">juanSPcode</h2>
                                <div class="badge badge-lg bg-white text-gray-700">Info</div>
                            </div>
                            <p class="text-white/90">Conoce un poco sobre quien soy yo </p>
                            <div class="card-actions justify-end mt-4">
                                <button class="btn btn-ghost text-white">Ver más →</button>
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>

            <!-- Call to Action - Registro de Visitas -->
            <div class="card bg-gradient-to-bl from-gray-200 to-gray-800  text-primary-content shadow-xl ">
                <div class="card-body items-center text-center">
                    <h2 class="card-title text-3xl mb-4 text-white">¿Te gustó el contenido?</h2>
                    <p class="text-lg mb-6 text-white/90">Regístrate como visitante de nuestro blog y mantente informado sobre la Semana de Sistemas</p>
                    <div class="card-actions">
                        <button class="btn-registrar-modal btn btn-secondary btn-lg">
                            Registrar mi visita
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <!-- Footer al final -->
    <footer class="flex-shrink-0">
        <?php include 'components/footer.php'?>
         <script>
            document.addEventListener('DOMContentLoaded', () => {
            // Animación del Hero
            gsap.from("#hero", {
                y: 50,                // Desplaza 50px hacia abajo
                opacity: 0,           // Comienza invisible
                duration: 1,          // Duración de 1 segundo
                ease: "power3.out"
            });

            // Animación de los elementos internos (herederos directos)
            gsap.from("#hero .hero-content > div", {
                opacity: 0,
                y: 30,
                stagger: 0.3,         // Los elementos animan uno tras otro
                delay: 0.5,
                duration: 1,
                ease: "power2.out"
            });
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
            // Rebote divertido en el título
            gsap.from("#hero-title", {
                y: -100,
                scale: 0.3,
                rotation: -15,
                opacity: 0,
                duration: 1.2,
                ease: "bounce.out"
            });

            // Subtítulo con entrada deslizante y giro de color
            gsap.from("#hero-subtitle", {
                x: 100,
                opacity: 0,
                duration: 1,
                delay: 0.8,
                ease: "elastic.out(1, 0.5)",
                onStart: () => {
                gsap.to("#hero-subtitle span", {
                    color: "#34736c", // Tu color personalizado
                    repeat: 3,
                    yoyo: true,
                    duration: 0.4,
                    delay: 1.2
                });
                }
            });

            // "Máquina de escribir" para otro texto (opcional)
            const text = document.querySelector('#hero-subtitle');
            const original = text.textContent;
            text.textContent = "";

            gsap.to({}, {
                duration: original.length * 0.06,
                onUpdate: function() {
                let progress = this.progress();
                let chars = Math.floor(original.length * progress);
                text.textContent = original.slice(0, chars);
                },
                delay: 1.5
            });
            });
        </script>
    </footer>
</body>
</html>