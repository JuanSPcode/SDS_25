<?php
    namespace lib;

    class Database{
        private $host = "db";
        private $dbname = "db_personas";
        private $user = "root";
        private $pwd = "rootpass";

        public $conn;

    public function getConnection() {
        $this->conn = null;
        
        // Verificar y crear DB primero
        $this->crearDB();

        try {
            $this->conn = new \PDO("mysql:host=".$this->host.";dbname=" .$this->dbname,$this->user, $this->pwd );
            $this->conn->exec("set names utf8mb4");
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            
            // Crear tablas si no existen
            $this->crearTablas();
        } catch (\PDOException $e) {
            error_log("No se pudo conectar a la db -> error: ".$e->getMessage());
        }
        return $this->conn;
        
    }        public function crearDB()  {
            try {
                // Conectar sin especificar la base de datos
                $tempConn = new \PDO("mysql:host=".$this->host, $this->user, $this->pwd);
                $tempConn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                
                // Verificar si la base de datos existe
                $stmt = $tempConn->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '".$this->dbname."'");
                $dbExists = $stmt->fetch();
                
                if (!$dbExists) {
                    // Crear la base de datos si no existe
                    $tempConn->exec("CREATE DATABASE IF NOT EXISTS `".$this->dbname."` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
                    // Base de datos creada exitosamente (comentado para evitar headers sent)
                }
                
                $tempConn = null;
                return true;
            } catch (\PDOException $e) {
                // Error al verificar/crear la base de datos (comentado para evitar headers sent)
                error_log("Error al verificar/crear la base de datos: ".$e->getMessage());
                return false;
            }
        }

        public function crearTablas() {
            try {
                // Tabla de usuarios
                $sqlUsuarios = "CREATE TABLE IF NOT EXISTS tbl_usuario (
                    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
                    visitor_id VARCHAR(32),
                    nombre VARCHAR(100) UNIQUE,
                    f_registro DATETIME DEFAULT CURRENT_TIMESTAMP,
                    visitas INT DEFAULT 0,
                    INDEX idx_visitor (visitor_id)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
                
                $this->conn->exec($sqlUsuarios);
                
                // Tabla de visitas
                $sqlVisitas = "CREATE TABLE IF NOT EXISTS tbl_visitas (
                    id_visita INT AUTO_INCREMENT PRIMARY KEY,
                    id_usuario INT,
                    visitor_id VARCHAR(32),
                    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
                    INDEX idx_visitor (visitor_id),
                    INDEX idx_fecha (fecha),
                    FOREIGN KEY (id_usuario) REFERENCES tbl_usuario(id_usuario) ON DELETE CASCADE
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
                
                $this->conn->exec($sqlVisitas);
                
                return true;
            } catch (\PDOException $e) {
                // Silenciar si las tablas ya existen
                return false;
            }
        }


    }


?>