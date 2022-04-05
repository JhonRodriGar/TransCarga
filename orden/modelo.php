<?php 

include "Orden.php";

$bd = new PDO('mysql:host=localhost;dbname=proyectofinal','root','');
$id_orden  = $_REQUEST['id_orden'];
$producto  = $_REQUEST['producto'];
$fecha_cargue  = $_REQUEST['fecha_cargue'];
$hora_cargue  = $_REQUEST['hora_cargue'];
$direccion  = $_REQUEST['direccion'];
$conductor  = $_REQUEST['conductor'];
$vehiculo  = $_REQUEST['vehiculo'];
$operacion =$_REQUEST['operacion'];
/*
echo "<pre>";
print_r($_REQUEST);
echo "</pre><hr>";
*/


$orden = new Orden($id_orden, $producto, $fecha_cargue, $hora_cargue, $direccion, $conductor, $vehiculo);

$orden->$operacion();

	header("location: http://localhost/proyectofinal/index.php?contenido=orden/listado.php")

 ?>