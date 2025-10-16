<?php
namespace app\models;

use lib\Database;

class Visita {
    private $conn;
    
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    
    /**
     * Obtiene o crea el visitor_id desde la sesión
     */
    public static function getVisitorId() {
        // La sesión ya debe estar iniciada en index.php
        // Solo verificamos por seguridad
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Si no existe visitor_id en la sesión, crear uno nuevo
        if (!isset($_SESSION['visitor_id'])) {
            $_SESSION['visitor_id'] = md5(uniqid(rand(), true));
        }
        
        return $_SESSION['visitor_id'];
    }
    
    /**
     * Registra una visita
     */
    public function registrarVisita($idUsuario = null) {
        try {
            $visitorId = self::getVisitorId();
            
            // Insertar la visita
            $sql = "INSERT INTO tbl_visitas (id_usuario, visitor_id, fecha) 
                    VALUES (:id_usuario, :visitor_id, NOW())";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id_usuario', $idUsuario, \PDO::PARAM_INT);
            $stmt->bindParam(':visitor_id', $visitorId);
            $stmt->execute();
            
            // Si hay usuario, actualizar su contador
            if ($idUsuario !== null) {
                $this->actualizarContadorUsuario($idUsuario);
            }
            
            return true;
        } catch (\PDOException $e) {
            error_log("Error al registrar visita: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Actualiza el contador de visitas del usuario
     */
    private function actualizarContadorUsuario($idUsuario) {
        try {
            $sql = "UPDATE tbl_usuario 
                    SET visitas = visitas + 1 
                    WHERE id_usuario = :id_usuario";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id_usuario', $idUsuario, \PDO::PARAM_INT);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log("Error al actualizar contador: " . $e->getMessage());
        }
    }
    
    /**
     * Registra o actualiza un usuario visitante
     */
    public function registrarUsuario($nombre) {
        try {
            $visitorId = self::getVisitorId();
            $nombre = trim($nombre);
            
            if (empty($nombre)) {
                return false;
            }
            
            // Verificar si el usuario ya existe
            $sql = "SELECT id_usuario FROM tbl_usuario WHERE nombre = :nombre";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute();
            $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);
            
            if ($usuario) {
                // Usuario existe, actualizar visitor_id si es necesario
                $idUsuario = $usuario['id_usuario'];
                $this->actualizarVisitorId($idUsuario, $visitorId);
            } else {
                // Crear nuevo usuario
                $sql = "INSERT INTO tbl_usuario (visitor_id, nombre, f_registro) 
                        VALUES (:visitor_id, :nombre, NOW())";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':visitor_id', $visitorId);
                $stmt->bindParam(':nombre', $nombre);
                $stmt->execute();
                $idUsuario = $this->conn->lastInsertId();
            }
            
            // Registrar la visita
            $this->registrarVisita($idUsuario);
            
            return $idUsuario;
        } catch (\PDOException $e) {
            error_log("Error al registrar usuario: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Actualiza el visitor_id de un usuario
     */
    private function actualizarVisitorId($idUsuario, $visitorId) {
        try {
            $sql = "UPDATE tbl_usuario 
                    SET visitor_id = :visitor_id 
                    WHERE id_usuario = :id_usuario";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':visitor_id', $visitorId);
            $stmt->bindParam(':id_usuario', $idUsuario, \PDO::PARAM_INT);
            $stmt->execute();
        } catch (\PDOException $e) {
            error_log("Error al actualizar visitor_id: " . $e->getMessage());
        }
    }
    
    /**
     * Obtiene estadísticas de visitas
     */
    public function getEstadisticas() {
        try {
            $stats = [];
            
            // Total de visitas
            $sql = "SELECT COUNT(*) as total FROM tbl_visitas";
            $stmt = $this->conn->query($sql);
            $stats['total_visitas'] = $stmt->fetch(\PDO::FETCH_ASSOC)['total'];
            
            // Visitantes únicos
            $sql = "SELECT COUNT(DISTINCT visitor_id) as total FROM tbl_visitas";
            $stmt = $this->conn->query($sql);
            $stats['visitantes_unicos'] = $stmt->fetch(\PDO::FETCH_ASSOC)['total'];
            
            // Usuarios registrados
            $sql = "SELECT COUNT(*) as total FROM tbl_usuario";
            $stmt = $this->conn->query($sql);
            $stats['usuarios_registrados'] = $stmt->fetch(\PDO::FETCH_ASSOC)['total'];
            
            // Visitas hoy
            $sql = "SELECT COUNT(*) as total FROM tbl_visitas WHERE DATE(fecha) = CURDATE()";
            $stmt = $this->conn->query($sql);
            $stats['visitas_hoy'] = $stmt->fetch(\PDO::FETCH_ASSOC)['total'];
            
            // Visitas esta semana
            $sql = "SELECT COUNT(*) as total FROM tbl_visitas WHERE WEEK(fecha) = WEEK(CURDATE())";
            $stmt = $this->conn->query($sql);
            $stats['visitas_semana'] = $stmt->fetch(\PDO::FETCH_ASSOC)['total'];
            
            return $stats;
        } catch (\PDOException $e) {
            error_log("Error al obtener estadísticas: " . $e->getMessage());
            return [
                'total_visitas' => 0,
                'visitantes_unicos' => 0,
                'usuarios_registrados' => 0,
                'visitas_hoy' => 0,
                'visitas_semana' => 0
            ];
        }
    }
    
    /**
     * Obtiene las visitas de un usuario específico
     */
    public function getVisitasUsuario($idUsuario) {
        try {
            $sql = "SELECT * FROM tbl_visitas 
                    WHERE id_usuario = :id_usuario 
                    ORDER BY fecha DESC
                    LIMIT 100";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id_usuario', $idUsuario, \PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            error_log("Error al obtener visitas del usuario: " . $e->getMessage());
            return [];
        }
    }
    
    /**
     * Obtiene información de un usuario por ID
     */
    public function getUsuario($idUsuario) {
        try {
            $sql = "SELECT * FROM tbl_usuario WHERE id_usuario = :id_usuario";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id_usuario', $idUsuario, \PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            error_log("Error al obtener usuario: " . $e->getMessage());
            return null;
        }
    }
    
    /**
     * Verifica si el visitante actual ya está registrado
     */
    public function getUsuarioActual() {
        try {
            if (isset($_SESSION['id_usuario'])) {
                return $this->getUsuario($_SESSION['id_usuario']);
            }
            
            $visitorId = self::getVisitorId();
            $sql = "SELECT * FROM tbl_usuario WHERE visitor_id = :visitor_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':visitor_id', $visitorId);
            $stmt->execute();
            
            $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);
            
            // Si encontramos usuario, guardarlo en sesión
            if ($usuario) {
                $_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['nombre'] = $usuario['nombre'];
            }
            
            return $usuario;
        } catch (\PDOException $e) {
            error_log("Error al obtener usuario actual: " . $e->getMessage());
            return null;
        }
    }
    
    /**
     * Obtiene el ranking de usuarios más activos
     */
    public function getRankingUsuarios($limit = 10) {
        try {
            $sql = "SELECT nombre, visitas, f_registro 
                    FROM tbl_usuario 
                    WHERE nombre IS NOT NULL
                    ORDER BY visitas DESC 
                    LIMIT :limit";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':limit', $limit, \PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            error_log("Error al obtener ranking: " . $e->getMessage());
            return [];
        }
    }
}
?>
