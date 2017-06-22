<?php namespace Modelos;
/**
* 
*/
class Clientes
{
	    private $IdCliente;
		private $Nombre;
		private $Cedula;
		private $Direccion;
		private $Correo;
		private $Telefono;
		private $Nacionalidad;
		private $Fecha;
		private $con;
	function __construct()
	{
		$this->con= new Modelos\Conexion();
	}

	public function set($atributo,$value)
	{
		$this->atributo=$value;
	}
	public function get($value)
	{
		return $this->$value;
	}
	public function Listar()
	{
		$sql= "SELECT * from Clientes";
    	$retorno = $this->con->getConsulta($sql);
    	return $retorno;
	}
	public function Guardar()
	{
		$sql = "INSERT INTO Clientes(Nombre , Cedula,Direccion,Correo,Telefono,Nacionalidad,Fecha) VALUES ('{$this->Nombre}','{$this->Cedula}','{$this->Correo}','{$this->Telefono}','{$this->Nacionalidad}','{$this->Fecha}');";
    	$this->con->setConsulta($sql);
	}
	public function Eliminar()
	{
		$sql= "DELETE from Clientes where IdCliente=".$this->$IdCliente;
         $this->con->setConsulta($sql);
	}
	public function Modificar()
	{
		$sql= "UPDATE  Clientes SET Nombre='{$this->Nombre}', Cedula='{$this->Cedula}','{$this->Direccion}', '{$this->Correo}','{$this->Telefono}','{$this->Nacionalidad}','{$this->Fecha}' where IdCliente=".$this->$IdCliente;
        $this->con->setConsulta($sql);
	}
	public function Mostrar()
    {
    	$sql= "SELECT * from Clientes where IdCliente=".$this->$IdCliente;
    	$retorno = $this->con->getConsulta($sql);
    	$row= mysqli_fetch_assoc($retorno);
    	return $row;
    }
    public function Consultar($Campo,$Filtro)
    {
    	$sql= "SELECT * from Clientes where ".$this->$Campo."LIKE '%".$this->$Filtro."%'";
    	$retorno = $this->con->getConsulta($sql);
    	$row= mysqli_fetch_assoc($retorno);
    	return $row;
    }
}


 ?>