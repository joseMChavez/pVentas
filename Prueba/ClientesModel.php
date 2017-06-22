<?php 
/**
* Esta es la clase para el registro de Clietnes
  
*/
include('db_config.php');
$conexion=Conectar();
class Clientes
{
	public $IdCliente;
	public $Nombres;
	public $Cedula;
	public $Nacionalidad;
	public $Direccion;
	public $Correo;
	public $Telefono;
	public $LimiteCredito;
	public $Fecha;
	
	function __construct()
	{
		 $Nombres="";
	     $Cedula="";
		 $Nacionalidad="";
		 $Direccion="";
		 $Correo="";
		 $Telefono="";
		 $LimiteCredito="";
		 $Fecha= date('l F d,Y');
	}
	public function Guardar()
	{
		
			$sql = "Insert into clientes(Nombres,Cedula,Nacionalidad,Direccion,Correo,Telefono,LimiteCredito,Fecha) Values('".$Nombres."','".$Cedula."','".$Nacionalidad."','".$Direccion."','".$Correo."','".$Telefono."',".$LimiteCredito.",now())";
		$conexion->query($sql) or die("error!");
		
		$IdCliente = $conexion->insert_id;
		return $IdCliente;
		
	}
}

 ?>