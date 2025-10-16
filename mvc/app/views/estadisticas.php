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

    <!-- Main content -->
    <div class="flex-grow bg-base-200">
        <main class="container mx-auto px-4 py-16">
            
            <!-- Título -->
            <div class="text-center mb-12">
                <h1 class="text-5xl font-bold text-base-content mb-4">
                    <i class="fas fa-chart-line text-primary mr-3"></i>
                    Estadísticas de Visitas
                </h1>
                <p class="text-lg text-base-content/70">Seguimiento en tiempo real de la Semana de Sistemas 2025</p>
            </div>

            <?php
            // Obtener estadísticas
            $visitaModel = new \app\models\Visita();
            $stats = $visitaModel->getEstadisticas();
            $ranking = $visitaModel->getRankingUsuarios(10);
            ?>

            <!-- Cards de estadísticas principales -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                
                <!-- Total Visitas -->
                <div class="card bg-gradient-to-br from-primary to-primary-focus shadow-xl text-white">
                    <div class="card-body">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-sm font-semibold text-white/80">Total Visitas</h2>
                                <p class="text-4xl font-bold mt-2 text-white"><?php echo number_format($stats['total_visitas']); ?></p>
                            </div>
                            <i class="fas fa-eye text-5xl text-white/20"></i>
                        </div>
                    </div>
                </div>

                <!-- Visitantes Únicos -->
                <div class="card bg-gradient-to-br from-secondary to-secondary-focus shadow-xl text-white">
                    <div class="card-body">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-sm font-semibold text-white/80">Visitantes Únicos</h2>
                                <p class="text-4xl font-bold mt-2 text-white"><?php echo number_format($stats['visitantes_unicos']); ?></p>
                            </div>
                            <i class="fas fa-users text-5xl text-white/20"></i>
                        </div>
                    </div>
                </div>

                <!-- Usuarios Registrados -->
                <div class="card bg-gradient-to-br from-accent to-accent-focus shadow-xl text-white">
                    <div class="card-body">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-sm font-semibold text-white/80">Usuarios Registrados</h2>
                                <p class="text-4xl font-bold mt-2 text-white"><?php echo number_format($stats['usuarios_registrados']); ?></p>
                            </div>
                            <i class="fas fa-user-check text-5xl text-white/20"></i>
                        </div>
                    </div>
                </div>

                <!-- Visitas Hoy -->
                <div class="card bg-gradient-to-br from-success to-success-focus shadow-xl text-white">
                    <div class="card-body">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-sm font-semibold text-white/80">Visitas Hoy</h2>
                                <p class="text-4xl font-bold mt-2 text-white"><?php echo number_format($stats['visitas_hoy']); ?></p>
                            </div>
                            <i class="fas fa-calendar-day text-5xl text-white/20"></i>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Visitas esta semana -->
            <div class="card bg-base-100 shadow-xl mb-12">
                <div class="card-body">
                    <h2 class="card-title text-2xl mb-4">
                        <i class="fas fa-calendar-week text-info mr-2"></i>
                        Esta Semana
                    </h2>
                    <div class="stats shadow w-full">
                        <div class="stat">
                            <div class="stat-figure text-info">
                                <i class="fas fa-chart-bar text-4xl"></i>
                            </div>
                            <div class="stat-title">Total de visitas</div>
                            <div class="stat-value text-info"><?php echo number_format($stats['visitas_semana']); ?></div>
                            <div class="stat-desc">Semana de Sistemas 2025 (13-17 Oct)</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ranking de usuarios más activos -->
            <?php if (!empty($ranking)): ?>
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-2xl mb-6">
                        <i class="fas fa-trophy text-warning mr-2"></i>
                        Top 10 Visitantes Más Activos
                    </h2>
                    
                    <div class="overflow-x-auto">
                        <table class="table table-zebra w-full">
                            <thead>
                                <tr>
                                    <th class="text-center">Posición</th>
                                    <th>Nombre</th>
                                    <th class="text-center">Visitas</th>
                                    <th>Registrado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $posicion = 1;
                                foreach ($ranking as $usuario): 
                                    $medalIcon = '';
                                    $medalClass = '';
                                    if ($posicion === 1) {
                                        $medalIcon = '<i class="fas fa-medal text-warning text-2xl"></i>';
                                        $medalClass = 'font-bold text-warning';
                                    } elseif ($posicion === 2) {
                                        $medalIcon = '<i class="fas fa-medal text-base-content/60 text-2xl"></i>';
                                        $medalClass = 'font-bold';
                                    } elseif ($posicion === 3) {
                                        $medalIcon = '<i class="fas fa-medal text-amber-700 text-2xl"></i>';
                                        $medalClass = 'font-bold';
                                    }
                                ?>
                                <tr class="hover">
                                    <td class="text-center">
                                        <?php echo $medalIcon ?: $posicion; ?>
                                    </td>
                                    <td class="<?php echo $medalClass; ?>">
                                        <div class="flex items-center gap-3">

                                            <div>
                                                <div class="font-semibold"><?php echo htmlspecialchars($usuario['nombre']); ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="badge badge-primary badge-lg">
                                            <?php echo number_format($usuario['visitas']); ?>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-sm opacity-70">
                                            <?php echo date('d/m/Y', strtotime($usuario['f_registro'])); ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php 
                                $posicion++;
                                endforeach; 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <div class="alert alert-info">
                <i class="fas fa-info-circle"></i>
                <span>Aún no hay usuarios registrados. ¡Sé el primero en registrarte!</span>
            </div>
            <?php endif; ?>

            <!-- Nota informativa -->
            <div class="alert alert-warning mt-8">
                <i class="fas fa-exclamation-triangle"></i>
                <div>
                    <h3 class="font-bold">Privacidad</h3>
                    <div class="text-sm">Las estadísticas se recopilan de manera anónima mediante identificadores únicos de sesión. 
                    Solo se almacena el nombre si decides registrarte voluntariamente.</div>
                </div>
            </div>

        </main>
    </div>

    <!-- Footer -->
    <footer class="flex-shrink-0">
        <?php include 'components/footer.php'?>
    </footer>
</body>
</html>
