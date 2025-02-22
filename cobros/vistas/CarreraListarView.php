<?php 
    include_once("../controladores/CarreraController.php");

    $carreraControllerObj= new CarreraController();
    $listaCarreras=$carreraControllerObj->getListaCarreras();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Listar Carreras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body class="p-3 m-0 border-0 bd-example m-0 border-0"> 
    <h3> Lista de carreras</h3>


    <table class="table table-hover">
			<THEAD>
				<tr scope="col">
					<td>ID</td>
					<td>NOMBRE</td>
				</tr>
			</THEAD>
			<tbody>
				<?php 
					while($row = mysqli_fetch_assoc($listaCarreras)): ?>
				<tr>
					<td><?php echo $row['CarreraId']; ?></td>
					<td><?php echo $row['Nombre']; ?></td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>    
</body>    
</html>