<?php namespace Modelos;
class UsuariosModel{
     private $IdUsuario;
	private $Nombre;
	private $Clave;
    private $con;
     
    public function __construct() {
        $this->$con  = new Conexion();
    }
    public function saludo(){
        echo "saludo";
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
    	$sql= "SELECT * from usuarios";
    	$retorno = $this->con->getConsulta($sql);
    	return $retorno;
    }
    public function Guardar()
    {
    		$sql = "INSERT INTO Usuarios(Nombre , Clave) VALUES ('".$this->$Nombre."','".$this->$Clave."');";
    	    $this->con->setConsulta($sql);
			
    }
    public function Eliminar()
    {
    	$sql= "DELETE from usuarios where IdUsuario=".$this->$IdUsuario;
         $this->con->setConsulta($sql);
    }
    public function Modificar()
    {
    	$sql= "UPDATE  usuarios SET Nombre='{$this->Nombre}', Clave='{$this->Clave}' where IdUsuario=".$this->$IdUsuario;
        $this->con->setConsulta($sql);
    }
    public function Mostrar()
    {
    	$sql= "SELECT * from usuarios where IdUsuario=".$this->$IdUsuario;
    	$retorno = $this->con->getConsulta($sql);
    	$row= mysqli_fetch_assoc($retorno);
    	return $row;
    }
     public function Consultar($Campo,$Filtro)
    {
        $sql= "SELECT * from Usuarios where ".$this->$Campo."LIKE '%".$this->$Filtro."%'";
        $retorno = $this->con->getConsulta($sql);
        $row= mysqli_fetch_assoc($retorno);
        return $row;
    }
}
?>