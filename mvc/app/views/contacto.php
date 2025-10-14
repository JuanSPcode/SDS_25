<!DOCTYPE html>
<html lang="es" class="h-full">
<head><?php include 'components/header.php'?></head>
<body class="h-full flex flex-col">
    <!-- Navbar fijo arriba -->
    <nav class="flex-shrink-0">
        <?php include 'components/nav.php'; ?>
    </nav>

    <!-- Main content que crece para empujar el footer -->
    <div class="flex-grow bg-base-200">
        
        <!-- Hero con imagen de fondo -->
        <section class="relative h-80 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-primary to-secondary opacity-90"></div>
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3')] bg-cover bg-center mix-blend-overlay"></div>
            <div class="relative h-full flex items-center justify-center">
                <div class="text-center text-white">
  
                </div>
            </div>
            <!-- Wave decoration -->
            <div class="absolute bottom-0 w-full">
                <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" class="fill-base-200"/>
                </svg>
            </div>
        </section>

        <main class="container mx-auto px-4 -mt-32 pb-16">
            
            <!-- Card principal del perfil -->
            <div class="card bg-base-100 shadow-2xl max-w-5xl mx-auto">
                <div class="card-body">
                    
                    <!-- Sección de foto de perfil y botones -->
                    <div class="flex flex-col lg:flex-row items-center lg:items-start gap-8">
                        
                        <!-- Foto de perfil -->
                        <div class="flex-shrink-0">
                            <div class="avatar">
                                <div class="w-48 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                    <img src="https://avatars.githubusercontent.com/u/136136391?s=400&u=dbe0bc2a19261c2a4c32e2822063c226a752b6e3&v=4" alt="Foto de perfil" />
                                </div>
                            </div>
                        </div>

                        <!-- Información principal -->
                        <div class="flex-grow text-center lg:text-left">
                            <h2 class="text-4xl font-bold text-base-content mb-2">Juan Antonio Sandoval Paiz</h2>
                            <div class="badge badge-primary badge-lg mb-4">Estudiante de Ingeniería en Sistemas</div>
                            
                            <div class="space-y-2 text-base-content/70">
                                <p class="flex items-center justify-center lg:justify-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                    </svg>
                                    <span class="font-semibold">Carnet:</span> SP23002
                                </p>
                                <p class="flex items-center justify-center lg:justify-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    <span class="font-semibold">Email:</span> juansp.code@gmial.com
                                </p>
                                <p class="flex items-center justify-center lg:justify-start gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="font-semibold">Universidad:</span> Universidad de El Salvador, FMO
                                </p>
                            </div>

                            <!-- Botones de redes sociales -->
                            <div class="flex gap-3 mt-6 justify-center lg:justify-start">
                                <!-- X (Twitter) -->
                                <a href="https://x.com/JuanSPcode" target="_blank" class="btn btn-circle btn-neutral">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                    </svg>
                                </a>
                                <!-- GitHub -->
                                <a href="https://github.com/JuanSPcode" target="_blank" class="btn btn-circle btn-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </a>
                                <!-- Reddit -->
                                <a href="https://www.reddit.com/user/Frequent-Sleep9073/" target="_blank" class="btn btn-circle btn-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 11.779c0-1.459-1.192-2.645-2.657-2.645-.715 0-1.363.286-1.84.746-1.81-1.191-4.259-1.949-6.971-2.046l1.483-4.669 4.016.941-.006.058c0 1.193.975 2.163 2.174 2.163 1.198 0 2.172-.97 2.172-2.163s-.975-2.164-2.172-2.164c-.92 0-1.704.574-2.021 1.379l-4.329-1.015c-.189-.046-.381.063-.44.249l-1.654 5.207c-2.838.034-5.409.798-7.3 2.025-.474-.438-1.103-.712-1.799-.712-1.465 0-2.656 1.187-2.656 2.646 0 .97.533 1.811 1.317 2.271-.052.282-.086.567-.086.857 0 3.911 4.808 7.093 10.719 7.093s10.72-3.182 10.72-7.093c0-.274-.029-.544-.075-.81.832-.447 1.405-1.312 1.405-2.318zm-17.224 1.816c0-.868.71-1.575 1.582-1.575.872 0 1.581.707 1.581 1.575s-.709 1.574-1.581 1.574-1.582-.706-1.582-1.574zm9.061 4.669c-.797.793-2.048 1.179-3.824 1.179l-.013-.003-.013.003c-1.777 0-3.028-.386-3.824-1.179-.145-.144-.145-.379 0-.523.145-.145.381-.145.526 0 .65.647 1.729.961 3.298.961l.013.003.013-.003c1.569 0 2.648-.315 3.298-.962.145-.145.381-.144.526 0 .145.145.145.379 0 .524zm-.189-3.095c-.872 0-1.581-.706-1.581-1.574 0-.868.709-1.575 1.581-1.575s1.581.707 1.581 1.575-.709 1.574-1.581 1.574z"/>
                                    </svg>
                                </a>
                                <!-- LinkedIn -->
                                <a href="https://www.linkedin.com/in/juan-antonio-sandoval-paiz-97276735a/" target="_blank" class="btn btn-circle btn-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Estadísticas -->
                        <div class="flex lg:flex-col gap-4 lg:gap-6">
                            <div class="text-center">
                                <div class="stat-value text-primary">7</div>
                                <div class="stat-desc">Café al dia</div>
                            </div>
                            <div class="divider lg:divider-horizontal"></div>
                            <div class="text-center">
                                <div class="stat-value text-secondary">5+</div>
                                <div class="stat-desc">Horas de sueño</div>
                            </div>
                            <div class="divider lg:divider-horizontal"></div>
                            <div class="text-center">
                                <div class="stat-value text-accent">100%</div>
                                <div class="stat-desc">Diciplina</div>
                            </div>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <!-- Sección Sobre mí -->
                    <div class="mt-8">
                        <h3 class="text-2xl font-bold text-base-content mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Sobre mí
                        </h3>
                        <div class="prose max-w-none">
                            <p class="text-base-content/80 leading-relaxed">
                                Soy estudiante de <strong>Ingeniería en Sistemas Informáticos</strong> en la Universidad de El Salvador, 
                                Facultad Multidisciplinaria Oriental. Actualmente en 2025 curso terce año de la carrera y espero pronto conseguir chamba.
                            </p>
                            <p class="text-base-content/80 leading-relaxed mt-4">
                                Este blog esta hecho con mucho amor y cariño para recordar <strong>Semana de Sistemas 2025</strong>, un evento organizado 
                                por ASEIS que reúne ponencias, talleres y actividades que enriquecen nuestra formación profesional.
                            </p>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <!-- Habilidades / Intereses -->
                    <div class="mt-8">
                        <h3 class="text-2xl font-bold text-base-content mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                            Áreas de Interés
                        </h3>
                        <div class="flex flex-wrap gap-3">
                            <div class="badge badge-lg badge-primary">Desarrollo Web</div>
                            <div class="badge badge-lg badge-secondary">PHP & MySQL</div>
                            <div class="badge badge-lg badge-accent">JavaScript</div>
                            <div class="badge badge-lg badge-success">Tailwind CSS</div>
                            <div class="badge badge-lg badge-warning">Git & GitHub</div>
                            <div class="badge badge-lg badge-info">C#</div>
                            <div class="badge badge-lg badge-error">Java</div>
                            <div class="badge badge-lg badge-success">Spring Boot</div>
                            <div class="badge badge-lg badge-primary">Bootstrap</div>
                            <div class="badge badge-lg badge-secondary">Música</div>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <!-- Información del proyecto -->
                    <div class="alert alert-info">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div>
                            <h3 class="font-bold">Proyecto Académico</h3>
                            <div class="text-xs">Este blog fue desarrollado como parte del curso de Técnicas de Programación para Internet, 
                            utilizando PHP, MySQL y el patrón arquitectónico MVC.</div>
                        </div>
                    </div>

                </div>
            </div>

        </main>
    </div>

    <!-- Footer al final -->
    <footer class="flex-shrink-0">
        <?php include 'components/footer.php'?>
    </footer>
</body>
</html>