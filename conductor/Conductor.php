<?php 
class Conductor
{				
	public $bd;
	public $documento;
	public $nombre;
	public $direccion;
	public $telefono;
	public $catlicencia;
	public $vencimiento;

	public function __construct($documento,$nombre,$direccion,$telefono,$catlicencia,$vencimiento){
		$this->documento = $documento;
		$this->nombre = $nombre;
		$this->direccion = $direccion;
		$this->telefono = $telefono;
		$this->catlicencia = $catlicencia;
		$this->vencimiento = $vencimiento;
		$this->bd  = new PDO('mysql:host=localhost;dbname=proyectofinal','root','');
	}
									
	public function getAll(){
		return $this->bd->query("SELECT * FROM conductores")->fetchAll(PDO::FETCH_OBJ);
	}
	
}

?>