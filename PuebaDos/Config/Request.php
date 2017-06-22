<?php namespace Config;
/**
* Re
*/
class Request
{
	private $controlador;
	private $metodo;
	private $argumento;

	public function __construct()
	{
		if (isset($_GET['url'])) {
			$ruta= filter_input(INPUT_GET,'url', FILTER_SANITIZE_URL);
			$ruta= explode("/", $ruta);
			$ruta= array_filter($ruta);
			if ($ruta[0]=="Index.php") {
			    $this->controlador= "Usuarios";
			}else{
				$this->controlador= strtolower(array_shift($ruta));
			}

			$this->metodo = strtolower(array_shift($ruta));
				if (!$this->metodo) {
					$this->metodo="Index";
				}
			$this->argumento = $ruta;
			

		}else{
			$this->controlador="Usuarios";
			$this->metodo="Index";
		}
	}

	public function getController()
	{
		 return $this->controlador;
	}
	public function getMetodo(){
		return $this->metodo;
	}
	public function getArgumento()
	{
		return $this->argumento;
	}
}
 ?>