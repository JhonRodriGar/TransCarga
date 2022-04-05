<?php 
	include "lib.php";
	include "Vehiculo.php";
	$c = new Vehiculo("","","","","","");
	$vehiculos = $c->getAll();

/*
	echo "<pre>";
	print_r($vehiculos);
	echo "</pre><hr>";
*/
?>


<link rel="stylesheet" type="text/css" href="css/miestilo.css">



<div class="content-wrapper">
	<div class="container"> <!-- Esta clase ya está es boostrap -->
			

	<?php include "menusupbd.php"; ?>

		<h3>Vehículos Disponibles</h3>	

	<table class="table table-hover table-success">
		<tr>
			<th>Placa</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Tipo Vehículo</th>
			<th>Capacidad</th>
			<th>Foto</th>
			<th>Opciones</th>
		</tr>

		<?php foreach ($vehiculos as $c): ?>

			<tr>
				<td><?php echo $c->placa; ?></td>
				<td><?php echo $c->marca; ?></td>
				<td><?php echo $c->modelo; ?></td>
				<td><?php echo $c->tipo; ?></td>
				<td><?php echo $c->capacidad; ?></td>
				<td>
					<img src="<?php echo "vehiculo/" . $c->foto ?>" class="rounded-circle avatar">
				</td>
				<td>
					<a href="index.php?contenido=vehiculo/formulario.php&placa=<?php echo $c->placa?>&marca=<?php echo $c->marca?>&modelo=<?php echo $c->modelo?>&tipo=<?php echo $c->tipo?>&capacidad=<?php echo $c->capacidad?>&foto=<?php echo $c->foto?>&accion=actualizar">
						<i class="fas fa-pencil-alt"></i>
					</a> 
					<a href="vehiculo/modelo.php?operacion=eliminar&placa=<?php echo $c->placa; ?>"><i class="fas fa-trash-alt ms-2"></i></a>
				</td> 
			</tr> 

		<?php endforeach; ?>

	</table>

	<a href="index.php?contenido=vehiculo/formulario.php&accion=guardar" class="btn btn-danger">Nuevo vehículo<i class="far fa-address-card"></i>
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