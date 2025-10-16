<!DOCTYPE html>
<html lang="en" class="h-full">
<head><?php include 'components/header.php'?></head>
<body class="h-full flex flex-col">
    <!-- Navbar fijo arriba -->
    <nav class="flex-shrink-0">
        <?php include 'components/nav.php'; ?>
    </nav>
    <!-- Espaciador para compensar navbar fijo -->
    <div class="my-8"></div>
    <!-- Main content que crece para empujar el footer -->
     
    <div class="flex-grow">
         <!-- Mostrando dia  lunes-->
        <?php if(isset($lunes)): ?>
            <div class="relative">
                <?php include 'components/dias/lunes.php'; ?>
            </div>
        <?php endif; ?>

        <?php if(isset($martes)): ?>
            <div class="relative">
                <?php include 'components/dias/martes.php'; ?>
            </div>
        <?php endif; ?>

        <?php if(isset($miercoles)): ?>
            <div class="relative ">
                <?php include 'components/dias/miercoles.php'; ?>
            </div>
        <?php endif; ?>

        <?php if(isset($jueves)): ?>
            <div class="relative">
                <?php include 'components/dias/jueves.php'; ?>
            </div>
        <?php endif; ?>

        <?php if(isset($viernes)): ?>
            <div class="relative">
                <?php include 'components/dias/viernes.php'; ?>
            </div>
        <?php endif; ?>
        
                        <!-- Orbes de luz difusos (el aura) -->
    <div class="absolute inset-0">
        <!-- Orbe azul principal centro -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[450px] bg-blue-500/40 rounded-full blur-[120px]"></div>
        
        <!-- Orbe secundario cyan -->
        <div class="absolute top-20 left-20 w-[400px] h-[400px] bg-cyan-400/30 rounded-full blur-[100px]"></div>
        
        <!-- Orbe terciario indigo -->
        <div class="absolute bottom-10 right-20 w-[500px] h-[350px] bg-indigo-600/35 rounded-full blur-[110px]"></div>
    </div>

    <!-- Footer al final -->
    <footer class="flex-shrink-0">
        <?php include 'components/footer.php'?>
    </footer>
</body>
</html>