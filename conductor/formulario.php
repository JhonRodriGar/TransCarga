<?php 
	if (isset($_GET['documento'])) {
		$documento = $_GET['documento'];
		$nombre = $_GET['nombre'];
		$direccion = $_GET['direccion'];
		$telefono = $_GET['telefono'];
		$catlicencia = $_GET['catlicencia'];
		$vencimiento = $_GET['vencimiento'];

		$accion = $_GET['accion'];
		$readonly = 'readonly';
	}
	else{
		$documento = '';
		$nombre = '';
		$direccion = '';
		$telefono = '';
		$catlicencia = '';
		$vencimiento = '';

		$accion = $_GET['accion'];
		$readonly = '';
	}

	// include "../nombre/nombre.php";
	// $c = new nombre("","");
	// $nombres = $c->getAll();

	// echo "<pre>";
	// print_r($_GET);
	// echo "</pre>";

?>

<link rel="stylesheet" type="text/css" href="css/miestilo.css">

<div class="content-wrapper">
	<div class="container"> <!-- Esta clase ya está es boostrap -->
		<h2><?php echo ucfirst($accion)?> Conductor </h2>

		<div class="row">

			<div class="col-6">

				<form action="conductor/modelo.php?operacion=<?php echo $accion?>" method="post">

						<div class="mb-3">
							<label class="form-label">Documento</label> 
							<input type="number" class="form-control" name="documento" value="<?php echo $documento?>" <?php echo $readonly ?>>
							<div class="form-text">Nunca compartimos su documento</div>
						</div>

						<div class="mb-3">
							<label class="form-label">Nombre</label>
							<input type="text" class="form-control" name="nombre" value="<?php echo $nombre?>">
						</div>

						<div class="mb-3">
							<label class="form-label">Dirección</label>
							<input type="text" class="form-control" name="direccion" value="<?php echo $direccion?>">
							<div class="form-text">Nunca compartimos su direccion</div>
						</div>

					</div>

					<div class="col-6">

						<div class="mb-3">
							<label class="form-label">Teléfono</label>
							<input type="text" class="form-control" name="telefono" value="<?php echo $telefono?>">
							<div class="form-text">Número para atender despachos</div>
						</div>

						<div class="mb-3">
							<label class="form-label">Categoría Licencia</label>				
							<select class="form-select" aria-label="" name="catlicencia">
								<option value="<?php echo $catlicencia?>"><?php echo $catlicencia ?></option>
								<option value="C1">C1</option>
								<option value="C2">C2</option>
								<option value="C3">C3</option>
							</select>
						</div>

						<div class="mb-3">
							<label class="form-label">Vencimiento</label>
							<input type="date" class="form-control" name="vencimiento" value="<?php echo $vencimiento?>">
						</div>
					</div>

					<button type="submit" class="btn btn-danger"><?php echo ucfirst($accion)?></button>
				</form>
				
		</div>
	</div>
</div>