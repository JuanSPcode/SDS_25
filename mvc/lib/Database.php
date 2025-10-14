<?php
    namespace lib;

    class Database{
        private $host = "db";
        private $dbname = "tbl_estudiantes";
        private $user = "root";
        private $pwd = "rootpass";

        public $conn;

        public function getConnection() {
            $this->conn = null;

            try {
                $this->conn = new \PDO("mysql:host=".$this->host.";dbname=" .$this->dbname,$this->user, $this->pwd );
                $this->conn->exec("set names utf8");
                $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                echo "no se pudo conectar a la db -> error: ".$e->getMessage();
            }
            return $this->conn;
            
        }
    }
?>