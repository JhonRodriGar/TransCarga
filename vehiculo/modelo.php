<?php 

include "Vehiculo.php";

$bd = new PDO('mysql:host=localhost;dbname=proyectofinal','root','');
$placa  = $_REQUEST['placa'];
$marca  = $_REQUEST['marca'];
$modelo  = $_REQUEST['modelo'];
$tipo  = $_REQUEST['tipo'];
$capacidad  = $_REQUEST['capacidad'];
$foto  = $_REQUEST['foto'];
$operacion =$_REQUEST['operacion'];
/*
echo "<pre>";
print_r($_REQUEST);
echo "</pre><hr>";
*/


$vehiculo = new Vehiculo($placa, $marca, $modelo, $tipo, $capacidad, $foto);

$vehiculo->$operacion();

if ($operacion=='guardar') {
	$origen = $_FILES['foto']['tmp_name'];
	$destino = "images/".$placa.".jpg";
	move_uploaded_file($origen, $destino);

	$vehiculo->placa = $placa;
	$vehiculo->foto = $destino;
	$vehiculo->actualizar();
}

/*
echo "<pre>";
print_r($_FILES);
echo "</pre>";
*/
if ($operacion=='actualizar') {
	$origen = $_FILES['foto']['tmp_name'];
	$destino = "images/".$placa.".jpg";
	move_uploaded_file($origen, $destino);

	$vehiculo->placa = $placa;
	$vehiculo->foto = $destino;
	$vehiculo->actualizar();
}

	header("location: http://localhost/proyectofinal/index.php?contenido=vehiculo/listado.php")

 ?>