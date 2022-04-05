<?php 
	include "lib.php";
	include "Orden.php";
	$o = new Orden("","","","","","","");
	$ordenes = $o->getAll();
/*
	echo "<pre>";
	print_r($ordenes);
	echo "</pre><hr>";
*/
?>

<link rel="stylesheet" type="text/css" href="css/miestilo.css">

<div class="content-wrapper">
	<div class="container"> <!-- Esta clase ya está es boostrap -->
			
	<?php include "menusupop.php"; ?>

		<h3>Ordenes de Cargue</h3>	


	<table class="table table-hover table-success">
		<tr>
			<th>Id Orden</th>
			<th>Producto</th>
			<th>Fecha Cargue</th>
			<th>Hora Cargue</th>
			<th>Dirección</th>
			<th>Conductor</th>
			<th>Vehículo</th>
			<th>Opciones</th>
		</tr>

		<?php foreach ($ordenes as $o): ?>

			<tr>
				<td><?php echo $o->id_orden; ?></td>
				<td><?php echo $o->producto; ?></td>
				<td><?php echo $o->fecha_cargue; ?></td>
				<td><?php echo $o->hora_cargue; ?></td>
				<td><?php echo $o->direccion; ?></td>
				<td><?php echo $o->nombre; ?></td>
				<td><?php echo $o->vehiculo; ?></td>
				<td>
					<a href="index.php?contenido=orden/formulario.php&id_orden=<?php echo $o->id_orden?>&producto=<?php echo $o->producto?>&fecha_cargue=<?php echo $o->fecha_cargue?>&hora_cargue=<?php echo $o->hora_cargue?>&direccion=<?php echo $o->direccion?>&conductor=<?php echo $o->conductor?>&nombre=<?php echo $o->nombre?>&vehiculo=<?php echo $o->vehiculo?>&accion=actualizar">
						<i class="fas fa-pencil-alt"></i>
					</a> 
					<a href="orden/modelo.php?operacion=eliminar&id_orden=<?php echo $o->id_orden; ?>"><i class="fas fa-trash-alt ms-2"></i></a>
				</td> 
			</tr> 

		<?php endforeach; ?>

	</table>

	<a href="index.php?contenido=orden/formulario.php&accion=guardar" class="btn btn-danger">Nueva orden<i class="far fa-address-card"></i>
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