<?php
    include_once("../controladores/Escuelacontroller.php");

    $objEscuelaController = new EscuelaController();
    $listaEscuelas = $objEscuelaController->listarCarreras();

?>
<div class="p-3 m-0 border-0 bd-example m-0 border-0"> 
    <h3> Lista de carreras</h3>
    <table class="table table-hover">
			<THEAD>
				<tr scope="col">
					<td>ID</td>
					<td>ESCUELA</td>
                    <td>DIRECCION</td>
                    <td>ACCIONES</td>
				</tr>
			</THEAD>
			<tbody>
				<?php 
					while($row = mysqli_fetch_assoc($listaEscuelas)): ?>
				<tr>
					<td><?php echo $row['EscuelaId']; ?></td>
					<td><?php echo $row['NombreDeLaEscuela']; ?></td>
                    <td><?php echo $row['Direccion']; ?></td>
                    <td>
                        <a href="" class="btn btn-primary">Editar</a>
                        <a href="" class="btn btn-danger">Eliminar</a>
				</tr>
                    
				<?php endwhile; ?>
			</tbody>
		</table>    
</div>    
