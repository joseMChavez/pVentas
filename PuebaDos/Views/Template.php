<?php namespace Views;
$Template = new Template();
/**
* Esto no ayudara a Crear La Plantilla
*/
class Template
{
	
	public function __construct()
	{
?>
		<!DOCTYPE html>
		<html lang="es">
		<head>
		    <meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<title>Punto de Ventas</title>
			<link rel="stylesheet" type="text/css" href="<?php echo URL;?>Views/css/bootstrap.css">
	        
			 <script src="<?php echo URL;?>js/jquery-2.2.0.min.js"></script>
			    <script src="<?php echo URL;?>js/toastr.min.js"></script>
		<div class="container">
			<div class="btn btn">
				Hola
			</div>
		</div>
		

<?php		
	}

	public function __destruct(){
?>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="<?php echo URL;?>js/bootstrap.min.js"></script>
        </body>
		</html>
<?php
      
	}
}
 ?>