<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>USUARIOS</title>
</head>
<body>
	<div>
		<h1>USERS PAGE</h1>
		<h2>BIENVENIDO: <?php echo $_SESSION['nombre'] ?> </h2>
		<h3>ROL: <?php echo $_SESSION['rol'] ?></h3>
		<form action="logout.php" action="logout.php">
			<button type="submit">CERRAR SESION</button>
		</form>
	</div>
</body>
</html>