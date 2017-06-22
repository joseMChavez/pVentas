<?php 

/**
* Este es el Controlador para el modelo de USuarios
*/

class UsuariosControler
{

	public function LlenarClase()
	{
		require_once("../Model/UsuariosModel.php");
		$usuario = new Usuarios();
		$usuario->Nombre= $_REQUEST['name'];
		$usuario->Clave= $_REQUEST['pass'];
        $usuario->Guardar();
	}
	function __construct()
	{
		
	}
	
	
}

$UsuariosC = new UsuariosControler();
$UsuariosC->LlenarClase();

 ?>