<?php 
/*	
	echo "<pre>";
	print_r($_GET);
	echo "</pre><hr>";
*/


	if (isset($_GET['contenido'])) {
		$contenido = $_GET['contenido'];
	}
	else{
		$contenido = "bienvenida.php";
	}

	include "encabezado.php";
	include "menu.php";
	include $contenido;
	include "pie.php";

?>