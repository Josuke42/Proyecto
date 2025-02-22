<?php

	class AEnrutador{

		public function cargarVista($vista){

			switch($vista):
                case "EscuelaListarView":
                    include_once("../vistas/".$vista.".php");
                break;
                case "EscuelaAddView":
                    include_once("../vistas/".$vista.".php");
                break;
                case "CategoriaListarView":
                    include_once("../vistas/".$vista.".php");
                break;
                default:
                    include_once("../vistas/error.php");
                break;
            endswitch;
		}

		public function validarGET($variable){
            if(empty($variable)){
                echo "<script> window.history.back();</script>";
            } else{
                return true;
            }
        }


	}

 ?>
