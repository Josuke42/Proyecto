<?php 
    include_once("../controladores/CarreraController.php");
    $carreraControllerObj = new CarreraController();
    if(isset($_POST['enviar'])){
        $response= $carreraControllerObj->addNew($_POST['Clave'], $_POST['Nombre'] , 1);
        if($response)
        {
            echo "registro exitoso";
        } else{
            echo "Error al registrar, consultar al administrador";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title> Carrrera Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0"> 

	<p>
	<div> 
    <h3> Registrar Carrera</h3>

	<form action="" method="POST"  >
    <div class="mb-3">
        <label for="exampleInputEmail1" 
            class="form-label">
            Clave
        </label>
        <input 
            type="text" 
            class="form-control" 
            name="Clave" 
            aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" 
            class="form-label">
            Nombre
        </label>
        <input 
            type="text" 
            class="form-control" 
            name="Nombre" 
            aria-describedby="emailHelp">
    </div>
    <button 
        type="submit" 
        class="btn btn-primary" 
        name="enviar" 
        value="Crear">
        Registrar
    </button>
 	</form>
	</div>
</body>    
</html>