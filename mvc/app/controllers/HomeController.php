<?php
namespace app\controllers;
use app\models\Persona;

class HomeController{

    public function index() {
        return $this->view("inicio");
    }


    public function calendario() {
        return $this->view("calendario");
    }

    public function contacto() {
        return $this->view('contacto');
    }

    # MOSTRANDO EL DIA A DIA
    public function lunes() {
        return $this->view('dias', ["lunes"=>"lunes"]);
    }

    public function martes() {
        return $this->view('dias', ["martes"=>"martes"]);
    }
    public function miercoles() {
        return $this->view('dias', ["miercoles"=>"miercoles"]);
    }

    public function jueves() {
        return $this->view('dias', ["jueves"=>"jueves"]);
    }

    public function viernes() {
        return $this->view('dias', ["viernes"=>"viernes"]);
    }

    public function todo() {
        return $this->view('dias', ["lunes"=>"lunes", "martes"=>"martes","miercoles"=>"miercoles","jueves"=>"jueves","viernes"=>"viernes"]);
    }


    public function mostrarPersonas() {
        $pers = new Persona();
        $personas = $pers->seleccionar();
        return $this->view("mostrarPersonas", ["persona"=>$personas]);
    }

    public function crear() {
        return $this->view("crear", []);
    }

    public function guardar() {
        $persona = new Persona();

        $persona->nombre = $_POST["nombre"];
        $persona->direccion = $_POST["direccion"];
        $persona->edad = $_POST["edad"];

        if($persona->crear()){
            header("Location: /mvc/public/mostrar");

            exit;
        } else{
            return $this->view("crear", ["error"=>"no se pudo crear porque hacen falta unos campos"]);
        }
    }

    public function eliminar($id) {
        $persona = new Persona();
        $persona->id = $id;
        $persona->eliminar();
        header("Location: /mvc/public/mostrar");
        exit;
    }

    public function editar($id) {
        $persona = new Persona();
        $persona->seleccionarID($id);
        return $this->view("editar", ["persona"=>$persona]);
    }


    public function actualizar() {
        $persona = new Persona();
        $persona->id = $_POST["id"];
        $persona->nombre = $_POST["nombre"];
        $persona->direccion = $_POST["direccion"];
        $persona->edad = $_POST["edad"];
        if($persona->actualizar()){
            header("Location: /mvc/public/mostrar");
            exit;
        } else {
            return $this->view("editar", ["persona"=>$persona, "error"=>"No se pudo eliminar por datos incorrectos"]);
        }
    }


    public function view($vista, $datos = null) {
        if(isset($datos)){
            extract($datos);
        }
        if(file_exists("../app/views/$vista.php")){
            ob_start();
            include("../app/views/$vista.php");
            $content = ob_get_clean();
            return $content;
        } else {
            echo "No se encontra la vista -> $vista.php";
        }     
    }


}

?>