<?php 
/**
* Esta clase nos servira para los usuarios

*/
include('db_config.php');
$conexion=Conectar();

class Usuarios 
{
	public $IdUsuario;
	public $Nombre;
	public $Clave;
     

	function __construct($name,$clave)
	{
		$this->Nombre= $name;
		$this->Clave= $clave;
	}
	
	public function Guardar(){
		if ($conexion) {
			$sql = "INSERT INTO Usuarios(Nombre , Clave) VALUES ('".$Nombre."','".$Clave."');";
			mysql_query($sql) or die('Error al Insertar Usuarios');
			$IdUsuario = mysql_insert_id();
			return $IdUsuario;
		}else
		    return 0;	
	}

}

 ?>