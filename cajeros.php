<?php 
session_start();
if($_SESSION['rol']!="cajero"){
	header('Location:index.php');
}
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CAJEROS</title>
</head>
<body>
	<div>
		<h1>BIENVENIDO A LA SECCION DE CAJEROS</h1>
	</div>
	<div>
		<p id="respuesta">
			
		</p>
		<button type="submit" onclick="listar()">VER CAJEROS</button>

	</div>

	<form action="logout.php" method="POST">
		<button type="submit">CERRAR SESION</button>
	</form>
</body>
<script>
	function listar(){
		const XHR = new XMLHttpRequest();
		XHR.onload=function(){
			document.getElementById("respuesta").innerHTML=XHR.responseText
		}
		XHR.open("GET","presentarCajeros.php",true);
		XHR.send();

	}
</script>
</html>