<?php 
/**
* Este es el controlado de Clientes una vez se inverta se recurre a Volver
a Cargar el Registro de Cleintes;
*/
class ClientesControler
{
	public function LlenarClase(){
		require_once '../Model/ClientesModel.php';
	   $clientes = new Clientes();
	   $clientes->Nombres= $_Request['name'];
	   $clientes->Cedula= $_Request['cedula'];
	   $clientes->Nacionalidad= $_REQUEST['nacionalidad'];
	   $clientes->Direccion=$_REQUEST['direccion'];
	   $clientes->Telefono=$_REQUEST['telefono'];
	   $clientes->Correo= $_REQUEST['correo'];
	   $clientes->LimiteCredito=$_REQUEST['limite'];
	   $clientes->Guardar();
	   return $clientes->Guardar();
	}
	
	
	function __construct(argument)
	{
		# code...
	}
}
$var = ClientesControler();
$var->LlenarClase();
if ($var>1) {
	print("Se Guardo Correctamente!");
}
require_once '../View/ClientesView.php';

 ?>