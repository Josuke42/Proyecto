<?php 
include_once("../modelos/Carrera.php");

class CarreraController{
    private $objCarrera;

    public function __construct(){
		$this->objCarrera= new Carrera();
	}

    public function getListaCarreras() {
        $resultado = $this->objCarrera->getListaCarreras();
        return $resultado;
    }

    public function addNew($Clave, $Nombre, $CreatedBy) {
        $this->objCarrera->set("Nombre", $Nombre);
        $this->objCarrera->set("Clave", $Clave);
        $this->objCarrera->set("CreatedBy", $CreatedBy); 
        $resultado= $this->objCarrera->addNew();
        return $resultado;
    }

    public function getById($CarreraId) {
        $this->objCarrera->set("CarreraId", $CarreraId);
        $carreraFound = $this->objCarrera->getById();
        return $carreraFound;
    }
    public function updateCarrera($CarreraId, $Nombre, $Active){
        $this->objCarrera->set('CarreraId', $CarreraId);
        $this->objCarrera->set('Nombre', $Nombre);
        $this->objCarrera->set('Active', $Active);
        //$this->objCarrera->editar();
    }
    

}

?>