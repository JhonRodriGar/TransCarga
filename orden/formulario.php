<?php 
	if (isset($_GET['id_orden'])) {
		$id_orden = $_GET['id_orden'];
		$producto = $_GET['producto'];
		$fecha_cargue = $_GET['fecha_cargue'];
		$hora_cargue = $_GET['hora_cargue'];
		$direccion = $_GET['direccion'];
		$conductor = $_GET['conductor'];
		$nombre = $_GET['nombre'];
		$vehiculo = $_GET['vehiculo'];

		$accion = $_GET['accion'];
		// $readonly = 'readonly';
	}
	else{
		$id_orden = '';
		$producto = '';
		$fecha_cargue = '';
		$hora_cargue = '';
		$direccion = '';
		$conductor = '';
		$nombre = '';
		$vehiculo = '';

		$accion = $_GET['accion'];
		// $readonly = '';
	}

	include "conductor/Conductor.php";
		$c = new Conductor("","","","","","");
		$conductores = $c->getAll();

	include "vehiculo/Vehiculo.php";
		$v = new Vehiculo("","","","","","");
		$vehiculos = $v->getAll();

/*	
echo "<pre>";
print_r($conductores);
echo "</pre>";

echo "<pre>";
print_r($vehiculos);
echo "</pre>";
*/


?>

<link rel="stylesheet" type="text/css" href="css/miestilo.css">

<div class="content-wrapper">
	<div class="container">

		<h2><?php echo ucfirst($accion)?> Orden </h2>



		<form action="orden/modelo.php?operacion=<?php echo $accion?>" method="post" enctype="multipart/form-data">

			<div class="mb-3">
				<label class="form-label">id_orden</label>
				<input type="text" class="form-control" name="id_orden" value="<?php echo $id_orden?>" readonly >
			</div>

			<div class="row">

				<div class="col-6">

					<div class="mb-3">
						<label class="form-label">Fecha Cargue</label>
						<input type="date" class="form-control" name="fecha_cargue" value="<?php echo $fecha_cargue?>">
					</div>

					<div class="mb-3">
						<label class="form-label">Hora Cargue</label>
						<input type="time" class="form-control" name="hora_cargue" value="<?php echo $hora_cargue?>">
					</div>


					<div class="mb-3">
						<label class="form-label">Producto</label>
						<input type="text" class="form-control" name="producto" value="<?php echo $producto?>">
					</div>

				</div>

				<div class="col-6">

					<div class="mb-3">
						<label class="form-label">Direccion</label>
						<input type="text" class="form-control" name="direccion" value="<?php echo $direccion?>">
					</div>

					<div class="mb-3">
						<label class="form-label">Conductor</label>
						<select class="form-select" aria-label="" name="conductor">
							<option value="<?php echo $conductor?>"><?php echo $nombre ?></option>
							<?php foreach ($conductores as $c):?>
								<option value="<?php echo $c->documento ?>"><?php echo $c->nombre ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<div class="mb-3">
						<label class="form-label">Vehículo</label>
						<select class="form-select" aria-label="" name="vehiculo">
							<option value="<?php echo $vehiculo?>"><?php echo $vehiculo ?></option>
							<?php foreach ($vehiculos as $v):?>
								<option value="<?php echo $v->placa ?>"><?php echo $v->placa ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>

				<button type="submit" class="btn btn-danger"><?php echo ucfirst($accion)?></button>

			</form>

		</div>

	</div>
	
</div>
