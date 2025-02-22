<?php
include_once("ConexionMySql.php");

    class Escuela{
        private $EscuelaId;
        private $NombreDeLaEscuela;
        private $Direccion;

        private $ObjectConnection;

        public function __construct(){
            $this->ObjectConnection= new ConexionMySql();
        }

    public function set($atributo, $contenido){
        $this->$atributo = $contenido;
    }

    public function get($atributo){
        return $this->$atributo;
    }

    public function listarEscuelas(): bool|mysqli_result{
        $sql = "SELECT * FROM Escuela";
        $resultado = $this->ObjectConnection->consultaRetorno(sql:$sql);
        return $resultado;
    }

}
?>