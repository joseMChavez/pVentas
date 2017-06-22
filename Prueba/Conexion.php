<?php 
/**
* Esta Clse es para las Conexion a la Base de Datos....
*/

 function ConectarDb()
{
	$db="pventasdb";
	$enlace = new mysqli("localhost","root@localhost","",$db)  //mysql_connect('localhost', 'root@localhost', '');
	if ($enlace->conect_errno) {
    	echo "Error al Conectar".$enlace->getmessage();
}else
    echo 'Conectado satisfactoriamente';

	if (!mysql_set_charset('utf8', $link)) {
    	echo "Error: Unable to set the character set.\n";
   		 exit;
}
    return $enlace;
}

 ?>