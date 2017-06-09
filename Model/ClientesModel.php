<?php 
/**
* Esta es la clase para el registro de Clietnes
  
*/
require_once 'db_config.php';
$conexion = Conectar();
class ClientesModel
{
	public $IdCliente;
	public $Nombres;
	public $Cedula;
	public $Nacionalidad;
	public $Direccion;
	public $Correo;
	public $Telefono;
	public $LimiteCredito;
	public $Fecha= date('l F d,Y');
	
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
		if ($conexion) {
			$sql = "Insert into Clientes(Nombres,Cedula,Nacionalidad,Direccion,Correo,Telefono,LimiteCredito,Fecha) Values('".$Nombres."','".$Cedula."','".$Nacionalidad."','".$Direccion."','".$Correo."','".$Correo."','"$Telefono"','".$LimiteCredito."',getdate())";
		mysql_query($sql) or die("Error en Guardar!");
		$IdCliente=mysql_insert_id();
		return $IdCliente;
		}else
		    return 0;
	}
}

 ?>