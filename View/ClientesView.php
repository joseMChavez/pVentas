<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
</head>
<body>
     <form method="post" action="../Controler/ClientesControler.php">
     <div>
     	<label for="name" >Nombre:</label>
     	<input type="text" id="name" name="name" maxlength="70" required>
     </div>
     <div>
     		<label for="cedula">Cedula:</label>
     		<input type="text" id="cedula" name="cedula" maxlength="15" required></br>
     </div>
     <div>
     		<label for="nacionalidad">Nacionalidad:</label>
         	<input type="text" id="nacionalidad" maxlength="20" name="nacionalidad">
     </div>
     <div>
     	<label for="direccion">Direccion:</label>
     	<input type="text" id="direccion" name="direccion" maxlength="150">
     </div>
     <div>
     	<label for="correo">Correo:</label>
     	<input type="text" id="correo" name="correo" required="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
     </div>	
     <div>	
        <label for="tel">Telefono:</label>
     	<input type="text" name="telefono" id="tel" maxlength="13" required>
     </div>
     <div>
     	<label for="limite">Limite de Credito:</label>
     	<input type="number" name="limite" id="limite" maxlength="10" required>
     </div>
     	<div>
     		
     	<button name="Guardar" value="Guardar" type="Submit">Guardar</button>
     	</div>

     </form>
</body>
</html>