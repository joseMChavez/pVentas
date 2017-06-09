<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
</head>
<body>
<form method="post" name="rUsuario" action="../Controler/USuariosControler.php">
	<div>
		<label for="name">
		Nombre:</label>
		<input id="name" type="text" name="name" required>
	
	</div>
	<div>
		<label for="pass">
		Clave:</label>
		<input type="password" id="pass" name="pass" required></br>
	
	</div>
	<div>
		<input value="Guardar" type="submit" name="envia" title="Guardar">
	</div>
	
</form>
</body>
</html>
 