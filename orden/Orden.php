<?php 
class Orden
{				
	public $bd;
	public $id_orden;
	public $producto;
	public $fecha_cargue;
	public $hora_cargue;
	public $direccion;
	public $conductor;
	public $vehiculo;

	public function __construct($id_orden,$producto,$fecha_cargue,$hora_cargue,$direccion,$conductor,$vehiculo){
		$this->id_orden = $id_orden;
		$this->producto = $producto;
		$this->fecha_cargue = $fecha_cargue;
		$this->hora_cargue = $hora_cargue;
		$this->direccion = $direccion;
		$this->conductor = $conductor;
		$this->vehiculo = $vehiculo;
		$this->bd  = new PDO('mysql:host=localhost;dbname=proyectofinal','root','');
	}
									
	public function guardar(){
		$this->bd->query("INSERT INTO ordenes VALUES(null,'$this->producto','$this->fecha_cargue','$this->hora_cargue','$this->direccion','$this->conductor','$this->vehiculo')");
	}

	public function actualizar(){
		$this->bd->query("UPDATE ordenes SET producto = '$this->producto', fecha_cargue = '$this->fecha_cargue', hora_cargue = '$this->hora_cargue', direccion = '$this->direccion', conductor = '$this->conductor', vehiculo = '$this->vehiculo' WHERE id_orden='$this->id_orden'");
	}

	public function eliminar(){
		$this->bd->query("DELETE FROM ordenes WHERE id_orden = '$this->id_orden'");
	}

	public function getAll(){
		return $this->bd->query("SELECT ordenes.id_orden, ordenes.producto, ordenes.fecha_cargue, ordenes.hora_cargue, ordenes.direccion, ordenes.conductor, conductores.nombre, conductores.direccion AS direccion_conductor, conductores.telefono, conductores.catlicencia, conductores.vencimiento, ordenes.vehiculo, vehiculos.marca, vehiculos.modelo, vehiculos.tipo, vehiculos.capacidad, vehiculos.foto FROM ordenes, conductores, vehiculos WHERE ordenes.conductor = conductores.documento AND ordenes.vehiculo = vehiculos.placa")->fetchAll(PDO::FETCH_OBJ);
	}

	public function get(){
		return $this->bd->query("SELECT * FROM ordenes WHERE id_orden = '$this->id_orden'")->fetch(PDO::FETCH_OBJ);
	}

	public function getLastInsert(){
		return $this->bd->query("SELECT id_orden FROM ordenes ORDER BY id_orden DESC LIMIT 1")->fetch(PDO::FETCH_OBJ)->id_orden;
	}
	
}

?>






















<?php 
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/
?>