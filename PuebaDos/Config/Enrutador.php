<?php namespace Config; 
/**
* Esta Clase nos ayudara Crear las rutas para un buen funcionamiento del MVC;
*/
class Enrutador{
	public static function run(Request $_request){
		$controlador= $_request->getControlador()."Controller";
		$ruta = ROOT. "Controller".SD.$controlador.".php";
		$metodo= $_request->getMetodo();
		if ($metodo=="Index.php") {
			$metodo="Index";
		}
		$argumento = $_request->getArgumento();
		if (is_readable($ruta)) {
			require_once($ruta);
			$show="Controller\\".$controlador;
			$controlador= new $show;

		}
		if (!isset($argumento)) {
			call_user_func(array($controlador,$metodo));
		}else{
			call_user_func_array(array($controlador,$metodo), $argumento);
		}
		//Cargar Vista
		$ruta= ROOT."Views".DS.$_request->getControlador().DS.$_request->getMetodo().".php";
		if (is_readable($ruta)) {
			require_once($ruta);
		}else{
			print("Sin Ruta! :/")\;
		}
	}	
	
}

 ?>