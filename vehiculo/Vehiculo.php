<?php 
class Vehiculo
{				
	public $bd;
	public $placa;
	public $marca;
	public $modelo;
	public $tipo;
	public $capacidad;
	public $foto;

	public function __construct($placa,$marca,$modelo,$tipo,$capacidad,$foto){
		$this->placa = $placa;
		$this->marca = $marca;
		$this->modelo = $modelo;
		$this->tipo = $tipo;
		$this->capacidad = $capacidad;
		$this->foto = $foto;
		$this->bd  = new PDO('mysql:host=localhost;dbname=proyectofinal','root','');
	}
									
	public function guardar(){
		$this->bd->query("INSERT INTO vehiculos VALUES('$this->placa','$this->marca','$this->modelo','$this->tipo','$this->capacidad','$this->foto')");
	}

	public function actualizar(){
		$this->bd->query("UPDATE vehiculos SET marca = '$this->marca', modelo = '$this->modelo', tipo = '$this->tipo', capacidad = '$this->capacidad', foto = '$this->foto' WHERE placa='$this->placa'");
	}

	public function eliminar(){
		$this->bd->query("DELETE FROM vehiculos WHERE placa = '$this->placa'");
	}

	public function getAll(){
		return $this->bd->query("SELECT * FROM vehiculos")->fetchAll(PDO::FETCH_OBJ);
	}

	public function get(){
		return $this->bd->query("SELECT * FROM vehiculos WHERE placa = '$this->placa'")->fetch(PDO::FETCH_OBJ);
	}

	public function getLastInsert(){
		return $this->bd->query("SELECT placa FROM vehiculos ORDER BY placa DESC LIMIT 1")->fetch(PDO::FETCH_OBJ)->placa;
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