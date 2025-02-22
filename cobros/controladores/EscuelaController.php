<?php
include_once("../modelos/Escuela.php");
class EscuelaController{
    private $objEscuela;

    public function __construct(){
        $this->objEscuela= new Escuela();
}

    public function listarCarreras(): bool|mysqli_result{
        $resultado = $this->objEscuela->listarEscuelas();
        return $resultado;
}
}

?>