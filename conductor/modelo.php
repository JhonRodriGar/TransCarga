<?php 

$bd = new PDO('mysql:host=localhost;dbname=proyectofinal','root','');
$documento  = $_REQUEST['documento'];
$nombre  = $_REQUEST['nombre'];
$direccion  = $_REQUEST['direccion'];
$telefono  = $_REQUEST['telefono'];
$catlicencia  = $_REQUEST['catlicencia'];
$vencimiento  = $_REQUEST['vencimiento'];
$operacion =$_REQUEST['operacion'];
/*
echo "<pre>";
print_r($_REQUEST);
echo "</pre><hr>";
*/
switch ($operacion) {
	case 'guardar':		guardar ($bd, $documento, $nombre, $direccion, $telefono, $catlicencia, $vencimiento); break;
	case 'actualizar':	actualizar ($bd, $documento, $nombre, $direccion, $telefono, $catlicencia, $vencimiento); break;
	case 'eliminar':	eliminar ($bd, $documento); break;
}

function guardar($bd, $documento, $nombre, $direccion, $telefono, $catlicencia, $vencimiento){
$bd->query("INSERT INTO conductores VALUES ('$documento','$nombre','$direccion','$telefono','$catlicencia','$vencimiento')");
}

function actualizar ($bd, $documento, $nombre, $direccion, $telefono, $catlicencia, $vencimiento) {
$bd->query("UPDATE conductores SET nombre = '$nombre', direccion = '$direccion', telefono = '$telefono', catlicencia = '$catlicencia', vencimiento = '$vencimiento' WHERE documento = '$documento'");
}

function eliminar ($bd, $documento){
$bd->query("DELETE FROM conductores WHERE documento = '$documento'");
}

	header("location: ../index.php?contenido=conductor/listado.php")

 ?>