<!DOCTYPE html>
<html lang="en" class="h-full">
<head><?php include 'components/header.php'?></head>
<body class="h-full flex flex-col">
    <!-- Navbar fijo arriba -->
    <nav class="flex-shrink-0">
        <?php include 'components/nav.php'; ?>
    </nav>
Los dias
    <!-- Main content que crece para empujar el footer -->
    <div class="flex-grow">
        <!-- Mostrando dia  lunes-->
        <?php if(isset($lunes)){
            include 'components/dias/lunes.php';
        } ?>

        <?php if(isset($martes)){
            include "components/dias/martes.php";
        }?>

        <?php if(isset($miercoles)){
            include "components/dias/miercoles.php";
        }?>

        <?php if(isset($jueves)){
            include "components/dias/jueves.php";
        }?>

        <?php if(isset($viernes)){
            include "components/dias/viernes.php";
        }?>
        
    </div>

    <!-- Footer al final -->
    <footer class="flex-shrink-0">
        <?php include 'components/footer.php'?>
    </footer>
</body>
</html>