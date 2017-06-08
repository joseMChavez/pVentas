<?php 
/**
* Esta clase nos servira para los usuarios

*/
include('Conexion.php');
$conexion=ConectarDb();

class UsuariosModel 
{
	public $IdUsuario;
	public $Nombre;
	public $Clave;
     

	function __construct($name,$clave)
	{
		$this->Nombre= $name;
		$this->Clave= $clave;
	}
	function __construct()
	{
		$this->Nombre= "";
		$this->Clave= "";
	}
	public function Guardar(){
		$sql = "INSERT INTO Usuarios(Nombre , Clave) VALUES ('".$Nombre."','".$Clave."');";
		mysql_query($sql) or die('Error al Insertar Usuarios');
		$IdUsuario = mysql_insert_id();
		return $IdUsuario;
	}

}

 ?>