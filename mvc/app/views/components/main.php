<main class="container mx-auto px-4 py-8">
    <!-- Título de la galería -->
    <div class=" mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Calendario SDS 2025</h1>
        
    </div>

    <!-- Galería de imágenes -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Imagen Principal -->
        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 cursor-pointer" onclick="openModal('./img/calendario/00-main.JPG', 'Calendario Principal')">
            <img class="h-100 w-full object-cover" src="./img/calendario/00-main.JPG" alt="Calendario Principal">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-4">
                    <h3 class="text-white font-bold text-lg">Calendario Principal</h3>
                    <p class="text-white text-sm">Click para ver en grande</p>
                </div>
            </div>
        </div>

        <!-- Lunes -->
        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 cursor-pointer" onclick="openModal('./img/calendario/01-lunes.JPG', 'Lunes')">
            <img class="h-100 w-full object-cover" src="./img/calendario/01-lunes.JPG" alt="Lunes">
            <div class="absolute inset-0 bg-gradient-to-t  to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-4">
                    <h3 class="text-white font-bold text-lg">Lunes</h3>
                    <p class="text-white text-sm">Click para ver en grande</p>
                </div>
            </div>
        </div>

        <!-- Martes -->
        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 cursor-pointer" onclick="openModal('./img/calendario/02-martes.JPG', 'Martes')">
            <img class="h-100 w-full object-cover" src="./img/calendario/02-martes.JPG" alt="Martes">
            <div class="absolute inset-0 bg-gradient-to-t  to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-4">
                    <h3 class="text-white font-bold text-lg">Martes</h3>
                    <p class="text-white text-sm">Click para ver en grande</p>
                </div>
            </div>
        </div>

        <!-- Miércoles -->
        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 cursor-pointer" onclick="openModal('./img/calendario/03-miercoles.JPG', 'Miércoles')">
            <img class="h-100 w-full object-cover" src="./img/calendario/03-miercoles.JPG" alt="Miércoles">
            <div class="absolute inset-0 bg-gradient-to-t  to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-4">
                    <h3 class="text-white font-bold text-lg">Miércoles</h3>
                    <p class="text-white text-sm">Click para ver en grande</p>
                </div>
            </div>
        </div>

        <!-- Jueves -->
        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 cursor-pointer" onclick="openModal('./img/calendario/04-jueves.JPG', 'Jueves')">
            <img class="h-100 w-full object-cover" src="./img/calendario/04-jueves.JPG" alt="Jueves">
            <div class="absolute inset-0 bg-gradient-to-t to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-4">
                    <h3 class="text-white font-bold text-lg">Jueves</h3>
                    <p class="text-white text-sm">Click para ver en grande</p>
                </div>
            </div>
        </div>

        <!-- Viernes -->
        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 cursor-pointer" onclick="openModal('./img/calendario/05-viernes.JPG', 'Viernes')">
            <img class="h-100 w-full object-cover" src="./img/calendario/05-viernes.JPG" alt="Viernes">
            <div class="absolute inset-0 bg-gradient-to-t  to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-4">
                    <h3 class="text-white font-bold text-lg">Viernes</h3>
                    <p class="text-white text-sm">Click para ver en grande</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para mostrar imagen en pantalla completa -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden items-center justify-center p-4" onclick="closeModal()">
        <div class="relative max-w-7xl max-h-full">
            <!-- Botón cerrar -->
            <button class="absolute top-4 right-4 text-white text-4xl font-bold hover:text-gray-300 z-10" onclick="closeModal()">&times;</button>
            
            <!-- Título -->
            <div class="absolute top-4 left-4 z-10">
                <h2 id="modalTitle" class="text-white text-2xl font-bold bg-black bg-opacity-50 px-4 py-2 rounded"></h2>
            </div>
            
            <!-- Imagen -->
            <img id="modalImage" class="max-w-full max-h-screen object-contain rounded-lg" src="" alt="">
        </div>
    </div>

    <script>
        function openModal(imageSrc, title) {
            event.stopPropagation();
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            modalImg.src = imageSrc;
            modalTitle.textContent = title;
            
            // Prevenir scroll del body
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            
            // Restaurar scroll del body
            document.body.style.overflow = 'auto';
        }

        // Cerrar modal con tecla ESC
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });
    </script>
</main>