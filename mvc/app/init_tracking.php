<?php
/**
 * Sistema de tracking de visitas
 * Este archivo se incluye en todas las páginas para registrar automáticamente las visitas
 * Solo registra UNA visita por sesión
 */

// Solo ejecutar si no estamos en una petición AJAX
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || 
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
    
    require_once __DIR__ . '/../autoloader.php';
    
    // Iniciar sesión si no está iniciada
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    // SOLO registrar si es la primera vez en esta sesión
    if (!isset($_SESSION['visita_registrada'])) {
        
        try {
            // Crear instancia del modelo de visitas
            $visitaModel = new \app\models\Visita();
            
            // Verificar si el usuario ya está en sesión
            $idUsuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : null;
            
            // Si no hay usuario en sesión, intentar recuperarlo por visitor_id
            if ($idUsuario === null) {
                $usuarioActual = $visitaModel->getUsuarioActual();
                if ($usuarioActual) {
                    $idUsuario = $usuarioActual['id_usuario'];
                }
            }
            
            // Registrar la visita (puede ser anónima o de usuario registrado)
            $visitaModel->registrarVisita($idUsuario);
            
            // Marcar que ya se registró la visita en esta sesión
            $_SESSION['visita_registrada'] = true;
            $_SESSION['timestamp_visita'] = time();
            
        } catch (Exception $e) {
            // Silenciar errores en producción
            error_log("Error en tracking de visitas: " . $e->getMessage());
        }
    }
}
?>
