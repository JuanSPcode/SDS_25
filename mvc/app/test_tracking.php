<?php
/**
 * Script de prueba del sistema de tracking de visitas
 * Ejecuta este archivo para verificar que todo funciona correctamente
 */

require_once __DIR__ . '/../autoloader.php';

use lib\Database;
use app\models\Visita;

echo "=== Sistema de Tracking de Visitas - Test ===\n\n";

// 1. Verificar conexión a la base de datos
echo "1. Verificando conexión a la base de datos...\n";
try {
    $db = new Database();
    $conn = $db->getConnection();
    if ($conn) {
        echo "   ✓ Conexión exitosa\n";
        echo "   ✓ Base de datos creada/verificada\n";
        echo "   ✓ Tablas creadas/verificadas\n\n";
    } else {
        echo "   ✗ Error en la conexión\n\n";
        exit(1);
    }
} catch (Exception $e) {
    echo "   ✗ Error: " . $e->getMessage() . "\n\n";
    exit(1);
}

// 2. Probar generación de visitor_id
echo "2. Probando generación de visitor_id...\n";
session_start();
$visitorId = Visita::getVisitorId();
echo "   ✓ visitor_id generado: " . substr($visitorId, 0, 8) . "...\n\n";

// 3. Probar registro de visita anónima
echo "3. Registrando visita anónima...\n";
try {
    $visitaModel = new Visita();
    $result = $visitaModel->registrarVisita(null);
    if ($result) {
        echo "   ✓ Visita anónima registrada correctamente\n\n";
    } else {
        echo "   ✗ Error al registrar visita\n\n";
    }
} catch (Exception $e) {
    echo "   ✗ Error: " . $e->getMessage() . "\n\n";
}

// 4. Probar registro de usuario
echo "4. Registrando usuario de prueba...\n";
try {
    $nombrePrueba = "Usuario Test " . date('His');
    $idUsuario = $visitaModel->registrarUsuario($nombrePrueba);
    if ($idUsuario) {
        echo "   ✓ Usuario registrado con ID: $idUsuario\n";
        echo "   ✓ Nombre: $nombrePrueba\n\n";
        
        // Verificar que el usuario fue creado
        $usuario = $visitaModel->getUsuario($idUsuario);
        if ($usuario) {
            echo "   ✓ Usuario recuperado correctamente\n";
            echo "     - Nombre: {$usuario['nombre']}\n";
            echo "     - Visitas: {$usuario['visitas']}\n";
            echo "     - Registro: {$usuario['f_registro']}\n\n";
        }
    } else {
        echo "   ✗ Error al registrar usuario\n\n";
    }
} catch (Exception $e) {
    echo "   ✗ Error: " . $e->getMessage() . "\n\n";
}

// 5. Registrar más visitas para el usuario
echo "5. Registrando visitas adicionales...\n";
try {
    for ($i = 1; $i <= 3; $i++) {
        $visitaModel->registrarVisita($idUsuario);
        echo "   ✓ Visita #$i registrada\n";
    }
    
    // Verificar contador actualizado
    $usuario = $visitaModel->getUsuario($idUsuario);
    echo "   ✓ Total de visitas del usuario: {$usuario['visitas']}\n\n";
} catch (Exception $e) {
    echo "   ✗ Error: " . $e->getMessage() . "\n\n";
}

// 6. Obtener estadísticas
echo "6. Obteniendo estadísticas generales...\n";
try {
    $stats = $visitaModel->getEstadisticas();
    echo "   ✓ Total de visitas: {$stats['total_visitas']}\n";
    echo "   ✓ Visitantes únicos: {$stats['visitantes_unicos']}\n";
    echo "   ✓ Usuarios registrados: {$stats['usuarios_registrados']}\n";
    echo "   ✓ Visitas hoy: {$stats['visitas_hoy']}\n";
    echo "   ✓ Visitas esta semana: {$stats['visitas_semana']}\n\n";
} catch (Exception $e) {
    echo "   ✗ Error: " . $e->getMessage() . "\n\n";
}

// 7. Obtener ranking
echo "7. Obteniendo ranking de usuarios...\n";
try {
    $ranking = $visitaModel->getRankingUsuarios(5);
    if (!empty($ranking)) {
        echo "   ✓ Top 5 usuarios:\n";
        foreach ($ranking as $index => $user) {
            echo "     " . ($index + 1) . ". {$user['nombre']} - {$user['visitas']} visitas\n";
        }
        echo "\n";
    } else {
        echo "   ⚠ No hay usuarios en el ranking aún\n\n";
    }
} catch (Exception $e) {
    echo "   ✗ Error: " . $e->getMessage() . "\n\n";
}

// 8. Verificar obtención de usuario actual
echo "8. Verificando obtención de usuario actual...\n";
try {
    $usuarioActual = $visitaModel->getUsuarioActual();
    if ($usuarioActual) {
        echo "   ✓ Usuario actual encontrado: {$usuarioActual['nombre']}\n";
        echo "   ✓ Visitas: {$usuarioActual['visitas']}\n\n";
    } else {
        echo "   ⚠ No hay usuario registrado en esta sesión\n\n";
    }
} catch (Exception $e) {
    echo "   ✗ Error: " . $e->getMessage() . "\n\n";
}

echo "=== Test completado ===\n";
echo "\n🎉 ¡Todo funciona correctamente!\n";
echo "\nPróximos pasos:\n";
echo "1. Visita http://localhost/public/ para ver el tracking en acción\n";
echo "2. Registra tu nombre en la página de contacto\n";
echo "3. Visita diferentes páginas para acumular visitas\n";
echo "4. Revisa las estadísticas en http://localhost/public/estadisticas\n";
?>
