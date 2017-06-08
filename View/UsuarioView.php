<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuarios</title>
</head>
<body>
<form method="post" name="rUsuario" action="../Controler/USuariosControler.php">
	<label>
		Nombre del Usuario:
		<input type="text" name="name">
	</label></br>
	<label>
		Clave:
		<input type="password" name="pass"></br>
	</label>
	<input value="Guardar" type="submit" name="envia" title="Guardar">
</form>
</body>
</html>
 