<?php
    namespace app\models;
    use lib\Database;
    class Persona{
        public $id;
        public $nombre;
        public $direccion;
        public $edad;
        private $conn;

        public function __construct() {
            $database = new Database();
            $this->conn = $database->getConnection();
        }

        public function seleccionar() {
            $stmt = $this->conn->prepare("SELECT * FROM tbl_personas");
            $stmt->execute();
            return $stmt->fetchALL(\PDO::FETCH_ASSOC);
        }

        public function seleccionarID($id) {
            $stmt = $this->conn->prepare("SELECT * FROM tbl_personas WHERE id_persona=?");
            $stmt->bindParam(1, $id);
            $stmt->execute();

            $row = $stmt->fetch(\PDO::FETCH_ASSOC);
            if($row){
                $this->id = $row["id_persona"];
                $this->nombre = $row["nombre"];
                $this->direccion = $row["direccion"];
                $this->edad = $row["edad"];
                return true;
            }
            return false;
        }

        public function crear(){
            $stmt = $this->conn->prepare("INSERT INTO tbl_personas (nombre, direccion, edad) VALUES (?,?,?)");
            $stmt->bindParam(1,$this->nombre);
            $stmt->bindParam(2,$this->direccion);
            $stmt->bindParam(3,$this->edad);

            return ($stmt->execute());
        }

        public function actualizar() {
            $stmt = $this->conn->prepare("UPDATE tbl_personas SET nombre=?, direccion=?, edad=? WHERE id_persona = ?");
            $stmt->bindParam(1,$this->nombre);
            $stmt->bindParam(2,$this->direccion);
            $stmt->bindParam(3,$this->edad);
            $stmt->bindParam(4,$this->id);

            if($stmt->execute()){
                return true;
            } 
            return false;
        }

        public function eliminar() {
            $stmt = $this->conn->prepare("DELETE FROM tbl_personas WHERE id_persona = ?");
            $stmt->bindParam(1, $this->id);

            if($stmt->execute()){
                return true;
            }
            return false;
        }

    }

?>