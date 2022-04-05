<?php 

 include "lib.php";

 ?>

<link rel="stylesheet" type="text/css" href="css/miestilo.css">

<div class="container">
	<!-- Crea el menú en la parte superior -->
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link" aria-current="page" href="<?php echo $raiz ?>index.php?contenido=conductor/listado.php">Conductores</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $raiz ?>index.php?contenido=vehiculo/listado.php">Vehículos</a>
			</li>
		</ul>
</div> 

		