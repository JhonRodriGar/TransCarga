<?php
	include "lib.php";
	$bd = new PDO('mysql:host=localhost;dbname=proyectofinal','root','');
	$conductores = $bd->query("SELECT * FROM conductores")->fetchAll(PDO::FETCH_OBJ);
?>

<link rel="stylesheet" type="text/css" href="css/miestilo.css">

<div class="content-wrapper">
<div class="container"> <!-- Esta clase ya está es boostrap -->

	<?php include "menusupbd.php"; ?>


	<h3>Base de datos de Conductores</h3>			
		<table class="table table-hover table-success">

			<tr>
				<th>Documento</th>
				<th>Nombre</th>
				<th>Dirección</th>
				<th>Teléfono</th>
				<th>Cat Licencia</th>
				<th>Vencimiento</th>
				<th>Opciones</th>
			</tr>

			<?php foreach ($conductores as $c): ?>

				<tr>
					<td><?php echo $c->documento; ?></td>
					<td><?php echo $c->nombre; ?></td>
					<td><?php echo $c->direccion; ?></td>
					<td><?php echo $c->telefono; ?></td>
					<td><?php echo $c->catlicencia; ?></td>
					<td><?php echo $c->vencimiento; ?></td>
					<td>
						<a href="index.php?contenido=conductor/formulario.php&documento=<?php echo $c->documento?>&nombre=<?php echo $c->nombre?>&direccion=<?php echo $c->direccion?>&telefono=<?php echo $c->telefono?>&catlicencia=<?php echo $c->catlicencia?>&vencimiento=<?php echo $c->vencimiento?>&accion=actualizar">
							<i class="fas fa-pencil-alt"></i>
						</a> 
						<a href="conductor/modelo.php?operacion=eliminar&documento=<?php echo $c->documento; ?>"><i class="fas fa-trash-alt ms-2"></i></a>
					</td> 
				</tr> 

			<?php endforeach; ?>

		</table>

	<a href="index.php?contenido=conductor/formulario.php&accion=guardar" class="btn btn-danger">Nuevo Conductor  <i class="far fa-address-card"></i>
	</a> 
</div>
</div>



 <?php 
/*
echo "<pre>";
print_r($c);
echo "</pre><hr>";
*/
 ?>