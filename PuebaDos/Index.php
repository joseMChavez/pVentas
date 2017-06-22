<?php 
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)).DS);
define('URL', 'http://localhost/PruebaDos/');

include_once 'Config/Autoload.php';
Config\Autoload::run();
$usu= new Modelos\UsuariosModel();
$usu->saludo();
include_once 'Views/Template.php';
Config\Autoload::run(new Config\Request());
 ?>