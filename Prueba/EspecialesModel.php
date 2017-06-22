<?php 
  /**
  * Esta es la Clase para los Especiales.
  */
  class Especiales
  {
  	public $IdEspecial;
  	public $IdProducto;
  	public $Descripcion;
  	public $Precio;
  	public $FechaInicial;
  	public $FechaFin;
  	public $esActivo;
  	public $Descuento;

  	function __construct(argument)
  	{
  		$IdProducto=0;
  		$IdEspecial=0;
  		$Descuento=0;
  		$Descripcion="";
  		$Precio=0;
  		$esActivo=false;

  	}
  	public function Guaradar(){
         if ($conexion) {
			$sql = "Insert into Clientes(IdProducto,Descuento,Precio,Descripcion,FechaInicial,FechaFin) Values('".$IdProducto."','".$Descuento."','".$Precio."','".$Descripcion."',getdate(),'".$FechaFin."')";
		mysql_query($sql) or die("Error en Guardar!");
		$IdEspecial=mysql_insert_id();
		return $IdEspecial;
		}else
		    return 0;
  	}
  }

 ?>