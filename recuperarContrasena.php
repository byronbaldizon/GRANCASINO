<?php  

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recuperacion de Contraseña</title>
</head>
<body>
	<h1>Formulario para recuperación de contraseña</h1>
	<h3>Para recuperar tu contraseña ingresa tu email.</h3>
	<h4>Allí te recibirás la clave con la cual puedes ingresar</h4>
	<form action="recuperarContrasenaAction.php" method="POST">
		<label for="email">Email:</label><br><br>
		<input id="email" type="email" name="email"><br><br>
		<button type="submit">ENVIAR</button>
	</form>
</body>
</html>