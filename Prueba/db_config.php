<?php
/**
 * Database config variables
 */
function Conectar()
{
define("DB_HOST", "localhost");//Nombre del Servidor
define("DB_USER", "root");//Nombre de Usuario
define("DB_PASSWORD", "");//Contraseña sino tiene dejarla en blanco ""
define("DB_DATABASE", "pventasdb");//Nombre de la Base de Datos

$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	
	return $db;

}
	?>