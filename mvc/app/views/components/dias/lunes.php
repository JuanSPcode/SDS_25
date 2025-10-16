<div>
        <!-- Hero Section con aura -->
    <section class="relative h-[500px] overflow-hidden bg-gray-900">
        
        <!-- Orbes de luz difusos (el aura) -->
        <div class="absolute inset-0">
            <!-- Orbe azul principal centro -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-blue-500/40 rounded-full blur-[120px]"></div>
            
            <!-- Orbe secundario cyan -->
            <div class="absolute top-20 left-20 w-[400px] h-[400px] bg-cyan-400/30 rounded-full blur-[100px]"></div>
            
            <!-- Orbe terciario indigo -->
            <div class="absolute bottom-10 right-20 w-[500px] h-[500px] bg-indigo-600/35 rounded-full blur-[110px]"></div>
        </div>
        
        <!-- Contenido -->
        <div class="relative h-full flex items-center justify-center z-10">
            <div class="text-center text-white px-4">
                <div class="badge badge-primary badge-lg mb-4">
                    <i class="fas fa-calendar-day mr-2"></i>
                    Día 1 - 13 de Octubre
                </div>
                <h1 class="text-6xl md:text-8xl font-bold mb-4">Lunes</h1>
                <p class="text-xl md:text-2xl opacity-90">Bienvenida e Inauguración de Semana de Sistemas 2025</p>
            </div>
        </div>
    </section>

    <!-- Contenido principal del día -->
    <div class="bg-base-200 py-16">
        <div class="container mx-auto px-4">
            
            <!-- Resumen del día -->
            <div class="max-w-4xl mx-auto mb-12">
                <div class="stats stats-vertical lg:stats-horizontal shadow w-full">
                    <div class="stat">
                        <div class="stat-figure text-primary">
                            <i class="fas fa-flag-checkered text-4xl"></i>
                        </div>
                        <div class="stat-title">Evento</div>
                        <div class="stat-value text-primary text-2xl">Inauguración</div>
                        <div class="stat-desc">Inicio oficial de la semana</div>
                    </div>
                    
                    <div class="stat">
                        <div class="stat-figure text-secondary">
                            <i class="fas fa-chalkboard-teacher text-4xl"></i>

                        </div>
                        <div class="stat-title">Ponencias</div>
                        <div class="stat-value text-secondary">2</div>
                        <div class="stat-desc">Bitcoin e IA Generativa</div>
                    </div>
                    
                    <div class="stat">
                        <div class="stat-figure text-accent">
                            <i class="fas fa-code text-4xl"></i>
                        </div>
                        <div class="stat-title">Actividad</div>
                        <div class="stat-value text-accent text-2xl">Hackathon</div>
                        <div class="stat-desc">Competencia de desarrollo</div>
                    </div>
                </div>
            </div>

            <!-- Timeline del día -->
            <div class="max-w-4xl mx-auto space-y-8">
                
                <!-- Sección 1: Ceremonia de Bienvenida -->
                <div class="card bg-base-100 shadow-xl border-l-4 border-primary">
                    <div class="card-body">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="bg-primary text-primary-content rounded-full p-4 flex-shrink-0">
                                <i class="fas fa-hand-sparkles text-2xl"></i>
                            </div>
                            <div class="flex-grow">
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="badge badge-outline badge-lg">
                                        <i class="fas fa-star mr-1"></i>
                                        Acto 1
                                    </span>
                                </div>
                                <h2 class="text-3xl font-bold text-base-content">Ceremonia de Bienvenida</h2>
                            </div>
                        </div>
                        
                        <div class="prose max-w-none">
                            <p class="text-lg leading-relaxed">
                                La Semana de Sistemas arrancó haciéndonos recordar de dónde venimos, recordando que somos salvadoreños. 
                                Entonamos el <strong>Himno Nacional</strong> con orgullo y patriotismo.
                            </p>
                            <p class="leading-relaxed">
                                Luego comenzó cada uno de la mesa de honor a presentarse, dando la bienvenida oficial al evento 
                                más esperado por los estudiantes de Ingeniería en Sistemas.
                            </p>
                        </div>

                        <!-- Galería de la ceremonia -->
                        <div class="divider">
                            <i class="fas fa-images mr-2"></i>
                            Galería de la Ceremonia
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="overflow-hidden rounded-lg hover:scale-105 transition-all duration-300 h-48">
                                <img src="./img/lunes/IMG_3224.jpeg" class="w-full h-full object-cover" alt="Himno Nacional">
                            </div>
                            <div class="overflow-hidden rounded-lg hover:scale-105 transition-all duration-300 h-48">
                                <img src="./img/lunes/IMG_3229.webp" class="w-full h-full object-cover" alt="Mesa de Honor">
                            </div>
                            <div class="overflow-hidden rounded-lg hover:scale-105 transition-all duration-300 h-48">
                                <img src="./img/lunes/IMG_3231.webp" class="w-full h-full object-cover" alt="Inauguración">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección 2: Ponencia Bitcoin -->
                <div class="card bg-base-100 shadow-xl border-l-4 border-warning">
                    <div class="card-body">
                        <div class="flex items-start gap-4 mb-4">
                        <div class="bg-primary text-primary-content rounded-full p-4 flex-shrink-0">
                                <i class="fas fa-wallet text-2xl"></i>
                            </div>
                            <div class="flex-grow">
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="badge badge-outline badge-lg">
                                        <i class="fas fa-chalkboard-teacher mr-1"></i>
                                        Ponencia 1
                                    </span>
                                </div>
                                <h2 class="text-3xl font-bold text-base-content">ABC del Bitcoin</h2>
                            </div>
                        </div>

                        <div class="prose max-w-none">
                            <h3 class="text-xl font-bold text-primary flex items-center gap-2">
                                <i class="fas fa-book-open"></i>
                                Curso de Introducción a Bitcoin
                            </h3>
                            <p class="text-lg"><strong>Tema principal:</strong> Entendiendo el dinero</p>
                            
                            <!-- Citas importantes -->
                            <div class="bg-base-200 p-4 rounded-lg my-4 border-l-4 border-info">
                                <i class="fas fa-quote-left text-info mr-2"></i>
                                <p class="italic text-base-content/80 inline">
                                    Está bien que la gente de esta nación no entienda nuestro sistema bancario y monetario, 
                                    porque si lo hiciera, creo que habría una revolución antes de mañana por la mañana.
                                </p>
                                <p class="text-right text-sm mt-2 font-semibold">— Henry Ford</p>
                            </div>

                            <div class="bg-base-200 p-4 rounded-lg my-4 border-l-4 border-success">
                                <i class="fas fa-quote-left text-success mr-2"></i>
                                <p class="italic text-base-content/80 inline">
                                    El dinero es el bien más comercializable que las personas adquieren porque quieren ofrecerlo 
                                    en actos posteriores de intercambio interpersonal.
                                </p>
                                <p class="text-right text-sm mt-2 font-semibold">— Ludwig von Mises</p>
                            </div>

                            <h4 class="text-lg font-bold mt-6 flex items-center gap-2">
                                <i class="fas fa-coins text-warning"></i>
                                Funciones del Dinero
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-4">
                                <div class="card bg-base-200 hover:scale-105 transition-all duration-300">
                                    <div class="card-body items-center text-center">
                                        <i class="fas fa-exchange-alt text-3xl text-primary mb-2"></i>
                                        <h5 class="font-bold">Medio de intercambio</h5>
                                    </div>
                                </div>
                                <div class="card bg-base-200 hover:scale-105 transition-all duration-300">
                                    <div class="card-body items-center text-center">
                                        <i class="fas fa-piggy-bank text-3xl text-secondary mb-2"></i>
                                        <h5 class="font-bold">Depósito de valor</h5>
                                    </div>
                                </div>
                                <div class="card bg-base-200 hover:scale-105 transition-all duration-300">
                                    <div class="card-body items-center text-center">
                                        <i class="fas fa-calculator text-3xl text-accent mb-2"></i>
                                        <h5 class="font-bold">Unidad de cuenta</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-success mt-6">
                                <i class="fas fa-question-circle text-xl"></i>
                                <div>
                                    <h4 class="font-bold">Pregunta Destacada del Público</h4>
                                    <p><strong>¿Qué billetera recomienda?</strong></p>
                                    <p class="text-sm mt-1">
                                        <i class="fas fa-check-circle mr-1"></i>
                                        Respuesta: <strong>BlinkWallet</strong> y unas USB especializadas que mostró
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Galería de la ponencia -->
                        <div class="divider">
                            <i class="fas fa-images mr-2"></i>
                            Galería de la Ponencia
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="overflow-hidden rounded-lg hover:scale-105 transition-all duration-300 h-64">
                                <img src="./img/lunes/IMG_3233.webp" class="w-full h-full object-cover" alt="Inauguración">
                            </div>
                            <div class="overflow-hidden rounded-lg hover:scale-105 transition-all duration-300 h-64">
                                <img src="./img/lunes/IMG_3234.webp" class="w-full h-full object-cover" alt="Inauguración">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección 3: Ponencia IA -->
                <div class="card bg-base-100 shadow-xl border-l-4 border-secondary">
                    <div class="card-body">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="bg-secondary text-secondary-content rounded-full p-4 flex-shrink-0">
                                <i class="fas fa-robot text-2xl"></i>
                            </div>
                            <div class="flex-grow">
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="badge badge-outline badge-lg">
                                        <i class="fas fa-chalkboard-teacher mr-1"></i>
                                        Ponencia 2
                                    </span>
                                </div>
                                <h2 class="text-3xl font-bold text-base-content">Inteligencia Artificial Generativa</h2>
                            </div>
                        </div>

                        <div class="prose max-w-none">
                            <h3 class="text-xl font-bold text-secondary flex items-center gap-2">
                                <i class="fas fa-brain"></i>
                                Tipos de Aprendizaje en IA
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                                <div class="card bg-primary text-primary-content hover:scale-105 transition-all duration-300">
                                    <div class="card-body">
                                        <div class="flex items-center gap-3 ">
                                            <i class="fas fa-book text-2xl"></i>
                                            <div>
                                                <h4 class="card-title text-lg">Aprendizaje Supervisado</h4>
                                                <p class="text-sm">Entrenamiento con datos etiquetados</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-secondary text-secondary-content hover:scale-105 transition-all duration-300">
                                    <div class="card-body">
                                        <div class="flex items-center gap-3">
                                            <i class="fas fa-search text-2xl"></i>
                                            <div>
                                                <h4 class="card-title text-lg">Aprendizaje No Supervisado</h4>
                                                <p class="text-sm">Descubrimiento de patrones sin etiquetas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-accent text-accent-content hover:scale-105 transition-all duration-300">
                                    <div class="card-body">
                                        <div class="flex items-center gap-3">
                                            <i class="fas fa-balance-scale text-2xl"></i>
                                            <div>
                                                <h4 class="card-title text-lg">Aprendizaje Semi-Supervisado</h4>
                                                <p class="text-sm">Combinación de datos etiquetados y no etiquetados</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-info text-info-content hover:scale-105 transition-all duration-300">
                                    <div class="card-body">
                                        <div class="flex items-center gap-3">
                                            <i class="fas fa-gamepad text-2xl"></i>
                                            <div>
                                                <h4 class="card-title text-lg">Aprendizaje por Refuerzo</h4>
                                                <p class="text-sm">Aprendizaje basado en recompensas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="text-xl font-bold text-gray-100 mt-8 flex items-center gap-2">
                                <i class="fas fa-masks-theater"></i>
                                Redes Antagónicas Generativas (GAN)
                            </h3>
                            <p class="leading-relaxed">
                                El ponente nos enseñó el concepto de <strong>Redes Antagónicas (GAN)</strong> con una analogía práctica: 
                                pidiendo a un modelo generar imágenes de gatos, mostrando cómo poco a poco la IA va mejorando sus resultados.
                            </p>

                            <h4 class="text-lg font-bold mt-6 flex items-center gap-2">
                                <i class="fas fa-tools"></i>
                                Herramientas Presentadas
                            </h4>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <div class="badge badge-lg badge-primary">
                                    <i class="fas fa-chart-bar mr-1"></i>
                                    Power BI
                                </div>
                                <div class="badge badge-lg badge-secondary">
                                    <i class="fas fa-cogs mr-1"></i>
                                    n8n (automatización)
                                </div>
                                <div class="badge badge-lg badge-accent">
                                    <i class="fas fa-language mr-1"></i>
                                    Large Language Models (LLM)
                                </div>
                            </div>

                            <p class="mt-4 leading-relaxed">
                                Nos enseñó un poco de cómo usar <strong>n8n</strong> para automatización de procesos con IA.
                            </p>
                        </div>

                        <!-- Galería de la ponencia -->
                        <div class="divider">
                            <i class="fas fa-images mr-2"></i>
                            Galería de la Ponencia
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="aspect-video bg-base-300 rounded-lg flex items-center justify-center hover:bg-base-200 transition-colors">
                                <div class="text-center text-base-content/50 hover:scale-105 transition-all duration-300">
                                    <img src="./img/lunes/IMG_3240.webp" class="rounded-lg w-full h-full object-cover" alt="Descripción">
                                </div>
                            </div>
                            <div class="aspect-video bg-base-300 rounded-lg flex items-center justify-center hover:bg-base-200 transition-colors">
                                <div class="text-center text-base-content/50 hover:scale-105 transition-all duration-300">
                                    <img src="./img/lunes/IMG_3238.webp" class="rounded-lg w-full h-full object-cover" alt="Descripción">
                                </div>
                            </div>
                            <div class="aspect-video bg-base-300 rounded-lg flex items-center justify-center hover:bg-base-200 transition-colors">
                                <div class="text-center text-base-content/50 hover:scale-105 transition-all duration-300">
                                    <img src="./img/lunes/IMG_3239.webp" class="rounded-lg w-full h-full object-cover" alt="Descripción">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección 4: Hackathon -->
                <div class="card bg-gradient-to-br from-primary to-secondary text-primary-content shadow-xl border-l-4 border-accent">
                    <div class="card-body">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="bg-accent text-warning-content rounded-full p-4 flex-shrink-0">
                                <i class="fas fa-laptop-code text-2xl"></i>
                            </div>
                            <div class="flex-grow">
                                <div class="flex items-center text-gray-200 gap-3 mb-2">
                                    <span class="badge badge-outline badge-lg">
                                        <i class="fas fa-code-branch mr-1"></i>
                                        Actividad Final
                                    </span>
                                </div>
                                <h2 class="text-3xl font-bold text-gray-100">Hackathon - Cierre del Día</h2>
                            </div>
                        </div>

                        <div class="prose max-w-none text-white">
                            <p class="text-lg leading-relaxed">
                                Para terminar el día, dio inicio la <strong>Hackathon</strong> donde hubo mucha participación 
                                y creatividad por parte de los estudiantes.
                            </p>
                        </div>

                        <div class="alert bg-accent text-warning-content mt-6">
                            <i class="fas fa-trophy text-2xl"></i>
                            <div>
                                <h3 class="font-bold text-lg">Proyecto Ganador</h3>
                                <p>El mejor sistema que armaron fue el de <strong>nuestros compañeros con el Bingo</strong></p>
                                <p class="text-sm mt-1 flex items-center gap-2">
                                    <i class="fas fa-medal"></i>
                                    ¡Felicitaciones al equipo ganador!
                                </p>
                            </div>
                        </div>

                        <!-- Galería del Hackathon -->
                        <div class="divider text-gray-200 divider-warning">
                            <i class="fas fa-images mr-2"></i>
                            Galería del Hackathon
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            <div class="overflow-hidden rounded-lg hover:scale-105 transition-all duration-300 h-64">
                                <img src="./img/lunes/image.png" class="w-full h-full object-cover" alt="Inauguración">
                            </div>
                            <div class="overflow-hidden rounded-lg hover:scale-105 transition-all duration-300 h-64">
                                <img src="./img/lunes/IMG_3241.png" class="w-full h-full object-cover" alt="Inauguración">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                
                    </div>
                </div>

            </div>
        </div>
    </div>
    
        
    

</div>