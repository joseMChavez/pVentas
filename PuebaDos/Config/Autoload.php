<?php namespace Config;
/**
* Es es la clase de AutoLoad
*/
class AutoLoad 
{
	public static function run(){
		spl_autoload_register(function($clase){
			$ruta= str_replace("\\","/", $clase).".php";
				include_once $ruta;
		});
	}
	public static function runDos(){
		echo "Hola soy Jose";
	}
}

 ?>