<?php 
/**
* Este es el controlado de Clientes una vez se inverta se recurre a Volver
a Cargar el Registro de Cleintes;
*/
class ClientesControler
{
	public function LlenarClase(){
		include'ClientesModel.php';
	   $clientes = new Clientes();
	   $clientes->Nombres= $_POST['name'];
	   $clientes->Cedula= $_POST['cedula'];
	   $clientes->Nacionalidad= $_POST['nacionalidad'];
	   $clientes->Direccion=$_POST['direccion'];
	   $clientes->Telefono=$_POST['telefono'];
	   $clientes->Correo= $_POST['correo'];
	   $clientes->LimiteCredito=$_POST['limite'];
	   $clientes->Guardar();
	
	   return $clientes->Guardar();
	}
	
	

}
$var = new ClientesControler();
$var->LlenarClase();

require_once 'ClientesView.php';

 ?>