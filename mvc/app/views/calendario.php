<!DOCTYPE html>
<html lang="en" class="h-full" >
<head><?php include 'components/header.php'?></head>
<body class=" flex flex-col">
    <!-- Navbar fijo arriba -->
    <nav class="flex-shrink-0">
        <?php include 'components/nav.php'; ?>
    </nav>

    <!-- Main content que crece para empujar el footer -->
    <main class="flex-grow">
        <?php include 'components/main.php';?>
    </main>

    <!-- Footer al final -->
    <footer class="flex-shrink-0">
        <?php include 'components/footer.php'?>
    </footer>
</body>
</html>