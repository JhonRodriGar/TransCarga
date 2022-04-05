<?php 
	if (isset($_GET['placa'])) {
		$placa = $_GET['placa'];
		$marca = $_GET['marca'];
		$modelo = $_GET['modelo'];
		$tipo = $_GET['tipo'];
		$capacidad = $_GET['capacidad'];
		$foto = $_GET['foto'];

		$accion = $_GET['accion'];
		$readonly = 'readonly';
	}
	else{
		$placa = '';
		$marca = '';
		$modelo = '';
		$tipo = '';
		$capacidad = '';
		$foto = '';

		$accion = $_GET['accion'];
		$readonly = '';
	}

	// include "../marca/Marca.php";
	// $c = new Marca("","");
	// $marcas = $c->getAll();

	// echo "<pre>";
	// print_r($_GET);
	// echo "</pre>";

?>

<link rel="stylesheet" type="text/css" href="css/miestilo.css">

<div class="content-wrapper">
	<div class="container">

		<h2><?php echo ucfirst($accion)?> Vehículo </h2>

		<div class="row">

			<div class="col-6">

				<form action="vehiculo/modelo.php?operacion=<?php echo $accion?>" method="post" enctype="multipart/form-data">

					<div class="mb-3">
						<label class="form-label">Placa</label>
						<input type="text" class="form-control" name="placa" value="<?php echo $placa?>" <?php echo $readonly ?>>
					</div>

					<div class="mb-3">
						<label class="form-label">Marca</label>
						<input type="text" class="form-control" name="marca" value="<?php echo $marca?>">
					</div>

					<div class="mb-3">
						<label class="form-label">Modelo</label>
						<input type="text" class="form-control" name="modelo" value="<?php echo $modelo?>">
					</div>

				</div>

				<div class="col-6">

					<div class="mb-3">
						<label class="form-label">Tipo de vehículo</label>				
						<select class="form-select" aria-label="" name="tipo">
							<option value="<?php echo $tipo?>"><?php echo $tipo ?></option>
							<option>Tractomula</option>
							<option>Patineta</option>
							<option>Camión</option>
							<option>Turbo</option>
						</select>
					</div>

					<div class="mb-3">
						<label class="form-label">Capacidad</label>
						<input type="text" class="form-control" name="capacidad" value="<?php echo $capacidad?>">
					</div>

					<div class="mb-3">
						<label class="form-label">Foto</label>
						<input type="file" class="form-control" name="foto">
					</div>

				</div>

				<button type="submit" class="btn btn-danger"><?php echo ucfirst($accion)?></button>

			</form>
		</div>

		<?php if ($accion == "actualizar"): ?>

			<div class="card mb-3" style="max-width: 800px; margin-left: 10%; margin-top: 20px; ">
				<div class="row g-0">
					<div class="col-md-4">
						<img src="vehiculo/<?php echo "$foto" ?>" style="max-width: 300px;">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h2 class="card-title"><?php echo "$placa"; ?></h2>
							<p class="card-text">Este es un vehículo marca <?php echo "$marca" ; ?>, modelo <?php echo "$modelo"; ?>, de tipo <?php echo "$tipo"; ?> y con una capacidad para transportar hasta <?php echo "$capacidad"; ?> toneladas de peso por viaje. Dispone de póliza todo riesgo vigente </p>
							<p class="card-text" style="margin-left: 20px; text-align: center;">En TransCarga estamos comprometidos con prestar un exelente servicio poniendo a disposición de nuestros clientes una amplia flota de vehículos en óptimas condiciones</p>
						</div>
					</div>
				</div>
			</div>

		<?php endif ?>

		<?php if ($accion == "guardar"): ?>

			<p class="card-text" style="margin-left: 20px; text-align: center; margin-top: 20px;">En TransCarga estamos comprometidos con prestar un exelente servicio poniendo a disposición de nuestros clientes una amplia flota de vehículos en óptimas condiciones.</p>

		<?php endif ?>
		
	</div>

</div>
