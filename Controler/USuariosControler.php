<?php 

/**
* Este es el Controlador para el modelo de USuarios
*/
class UsuariosControler
{

	require_once("../Model/UsuariosModel.php");
	$usuario = new UsuariosModel();
	$usuario->Nombre= $_REQUEST['name'];
	$usuario->Clave= $_REQUEST['pass'];	
}

 ?>