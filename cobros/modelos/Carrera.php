<?php
include_once("ConexionMySql.php");

class Carrera {
    private $CarreraId;
    private $Nombre;
    private $Clave;
    private $Active;
    private $CreatedBy;

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

    public function getListaCarreras(){
        $sql = "SELECT * FROM carrera";
        $resultado = $this->ObjectConnection->consultaRetorno($sql);
        return $resultado;
    }

    public function addNew(){		
        $sql = "INSERT INTO carrera (Nombre, Clave, CreatedBy) VALUES
            ('{$this->Nombre}', '{$this->Clave}','{$this->CreatedBy}')";
        $this->ObjectConnection->consultaSimple($sql);
        return true;
    }

    public function getById(){
        $sql = "SELECT * FROM carrera WHERE CarreraId = '{$this->CarreraId}' LIMIT 1";
        $resultado = $this->ObjectConnection->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($resultado);
        $this->CarreraId = $row['CarreraId'];
        $this->Clave = $row['Clave'];
        $this->Nombre = $row['Nombre'];
        return $row;
    }

    public function updateCarrera(){
        $sql = "UPDATE carrera SET Nombre = '{$this->Nombre}', 
            Clave = '{$this->Clave}' Active = '{$this->Active}' WHERE CarreraId = '{$this->CarreraId}'";
        $this->ObjectConnection->consultaSimple($sql);
        return true;
    }
}
?>