<div class="relative">
<!-- Hero Section con aura -->
<section class="relative h-[500px] overflow-hidden bg-gray-900">
        <div class="absolute inset-0">
            <!-- Orbe azul principal centro -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-blue-500/40 rounded-full blur-[120px]"></div>
            
            <!-- Orbe secundario cyan -->
            <div class="absolute top-20 left-20 w-[400px] h-[400px] bg-cyan-400/30 rounded-full blur-[100px]"></div>
            
            <!-- Orbe terciario indigo -->
            <div class="absolute bottom-10 right-20 w-[500px] h-[500px] bg-indigo-600/35 rounded-full blur-[110px]"></div>
        </div>
        
    <div class="relative h-full flex items-center justify-center z-10">
        <div class="text-center text-white px-4">
            <div class="badge badge-primary badge-lg mb-4">
                <i class="fas fa-calendar-day mr-2"></i>
                Día 2 - 14 de Octubre
            </div>
            <h1 class="text-6xl md:text-8xl font-bold mb-4">Martes</h1>
            
            
            <p class="text-xl md:text-2xl opacity-90">
                <i class="fas fa-bolt text-2xl"></i>
                <span class="font-bold">Jornada virtual por lluvias:</span> talleres y aprendizajes en línea
            </p>
        </div>
    </div>
</section>

<!-- Contenido principal del día -->
<div class="bg-base-200 py-16">
    <div class="container mx-auto px-4">
        <!-- Resumen con métricas clave -->
        <div class="max-w-4xl mx-auto mb-12">
            <div class="stats stats-vertical lg:stats-horizontal shadow w-full">
                <div class="stat">
                    <div class="stat-figure text-primary">
                        <i class="fas fa-laptop-house text-4xl"></i>
                    </div>
                    <div class="stat-title">Modalidad</div>
                    <div class="stat-value text-primary text-2xl">Virtual</div>
                    <div class="stat-desc">Transmisión por lluvias intensas</div>
                </div>
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <i class="fas fa-user-tie text-4xl"></i>
                    </div>
                    <div class="stat-title">Facilitadores</div>
                    <div class="stat-value text-secondary">3</div>
                    <div class="stat-desc">MSc y Ing </div>
                </div>
                <div class="stat">
                    <div class="stat-figure text-accent">
                        <!-- <i class="fas fa-lightbulb text-4xl"></i> -->
                        <i class="fas fa-code text-4xl"></i>
                    </div>
                    <div class="stat-title">Talleres</div>
                    <div class="stat-value text-accent text-2xl">3</div>
                    <div class="stat-desc">Decisiones, CRUD y Panorama IA</div>
                </div>
            </div>
        </div>

        <!-- Cronología del día -->
        <div class="max-w-4xl mx-auto space-y-8">
            <!-- Taller 1 -->
            <div class="card bg-base-100 shadow-xl border-l-4 border-primary">
                <div class="card-body">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="bg-primary text-primary-content rounded-full p-4 flex-shrink-0">
                            <i class="fas fa-chart-line text-2xl"></i>
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="badge badge-outline badge-lg">
                                    <i class="fas fa-chalkboard-teacher mr-1"></i>
                                    Taller #1
                                </span>
                            </div>
                            <h2 class="text-3xl font-bold text-base-content">Toma de decisiones estratégicas basadas en datos</h2>
                            <p class="text-sm text-base-content/70">Dirigido por: MSc. Enrique Cortez</p>
                        </div>
                    </div>
                    <div class="prose max-w-none">
                        <p class="leading-relaxed">
                            Iniciamos conectados desde casa repasando la ruta que sigue un dato hasta convertirse en conocimiento capaz de guiar estrategias empresariales.
                            Enrique nos invitó a definir claramente qué es un <strong>dato</strong> antes de dar el salto a la analítica avanzada.
                        </p>
                        <div class="bg-base-200 p-4 rounded-lg my-4 border-l-4 border-info">
                            <h3 class="font-semibold text-base-content flex items-center gap-2">
                                <i class="fas fa-database text-info"></i>
                                Cadena de valor compartida
                            </h3>
                            <p class="italic text-base-content/80">
                                Dato (unidad aislada) → datos organizados → información → estructuras complejas (conocimiento).
                            </p>
                        </div>
                        <p class="leading-relaxed">
                            Conversamos sobre la ética al manejar grandes volúmenes de datos y la necesidad de medir cada decisión con métricas claras.
                        </p>
                    </div>

                    <div class="divider">
                        <i class="fas fa-images mr-2"></i>
                        Capturas del taller virtual
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="text-center text-base-content/60">
                            <div class="overflow-hidden rounded-lg hover:scale-105 transition-all duration-300 h-60">
                                <img src="./img/martes/09.jpeg" class="w-full h-full object-cover" alt="Himno Nacional">
                            </div>
                        </div>
                        <div class="text-center text-base-content/60">
                            <div class="overflow-hidden rounded-lg hover:scale-105 transition-all duration-300 h-60">
                                <img src="./img/martes/10.jpeg" class="w-full h-full object-cover" alt="Himno Nacional">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Taller 2 -->
            <div class="card bg-base-100 shadow-xl border-l-4 border-info">
                <div class="card-body">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="bg-info text-info-content rounded-full p-4 flex-shrink-0">
                            <i class="fas fa-bolt text-2xl"></i>
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="badge badge-outline badge-lg">
                                    <i class="fas fa-code mr-1"></i>
                                    Taller #2.2
                                </span>
                            </div>
                            <h2 class="text-3xl font-bold text-base-content">Construyendo un CRUD en minutos con Laravel y Filament</h2>
                            <p class="text-sm text-base-content/70">Dirigido por: Ing. Gabriel Castillo</p>
                        </div>
                    </div>
                    <div class="prose max-w-none">
                        <p class="leading-relaxed">
                            El Ing Gabriel dio inicio a su taller explicando como instalar <strong>Laravel</strong> y <strong>Filament</strong>, como funciona laravel y dejando claro el potencial de ambas herramientas cuando se combinan.
                        </p>
                        <div class="divider"></div>
                        <p class="leading-relaxed">
                            Fue tan dinámico que terminamos con ganas de profundizar en personalización avanzada y despliegues reales.
                        </p>
                    </div>
                    <div class="divider">
                        <i class="fas fa-layer-group mr-2"></i>
                        Capturas tomadas
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="text-center text-base-content/60">
                            <div class="overflow-hidden rounded-lg hover:scale-105 transition-all duration-300 h-48">
                                <img src="./img/martes/03.png" class="w-full h-full object-cover" alt="Himno Nacional">
                            </div>
                        </div>
                        <div class="text-center text-base-content/60">
                            <div class="overflow-hidden rounded-lg hover:scale-105 transition-all duration-300 h-48">
                                <img src="./img/martes/04.png" class="w-full h-full object-cover" alt="Himno Nacional">
                            </div>
                        </div>
                        <div class="text-center text-base-content/60">
                            <div class="overflow-hidden rounded-lg hover:scale-105 transition-all duration-300 h-48">
                                <img src="./img/martes/05.png" class="w-full h-full object-cover" alt="Himno Nacional">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Taller 3 -->
            <div class="card bg-base-100 shadow-xl border-l-4 border-secondary">
                <div class="card-body">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="bg-secondary text-secondary-content rounded-full p-4 flex-shrink-0">
                            <i class="fas fa-robot text-2xl"></i>
                        </div>
                        <div class="flex-grow">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="badge badge-outline badge-lg">
                                    <i class="fas fa-microchip mr-1"></i>
                                    Taller #4
                                </span>
                            </div>
                            <h2 class="text-3xl font-bold text-base-content">Panorama crítico de las inteligencias artificiales emergentes</h2>
                            <p class="text-sm text-base-content/70">Dirigido por: MSc. José Salmerón</p>
                        </div>
                    </div>
                    <div class="prose max-w-none">
                        <p class="leading-relaxed">
                            Cerramos la jornada con un repaso de las IA más disruptivas del momento y la preocupación creciente por distinguir entre contenido humano y generado artificialmente.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                            <div class="card bg-primary text-primary-content">
                                <div class="card-body">
                                    <h4 class="card-title flex items-center gap-2">
                                        <i class="fas fa-shield-alt"></i>
                                        Riesgos discutidos
                                    </h4>
                                    <ul class="list-disc pl-5 text-sm space-y-1">
                                        <li>Deepfakes y suplantación de identidad.</li>
                                        <li>Sesgos heredados en modelos preentrenados.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card bg-info text-info-content">
                                <div class="card-body">
                                    <h4 class="card-title flex items-center gap-2">
                                        <i class="fas fa-lightbulb"></i>
                                        Recomendaciones
                                    </h4>
                                    <ul class="list-disc pl-5 text-sm space-y-1">
                                        <li>Verificación cruzada de fuentes.</li>
                                        <li>Uso responsable de herramientas generativas.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="leading-relaxed">
                            Salimos motivados a seguir investigando y a construir criterios sólidos para no caer en desinformación.
                        </p>
                    </div>
                    <div class="divider">
                        <i class="fas fa-images mr-2"></i>
                        Comienzo del taller
                    </div>
                    <div class="grid grid-cols-1  gap-4">
                        <div class="text-center text-base-content/60">
                            <div class="overflow-hidden rounded-lg hover:scale-105 transition-all duration-300 h-full">
                                <img src="./img/martes/08.png" class="w-full h-full object-cover" alt="Himno Nacional">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
</div>




</div>
