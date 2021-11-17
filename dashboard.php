<?php 
session_start();
if($_SESSION['rol']!='admin'){
	header('Location:index.php');
}
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>DASHBOARD</title>
 	<style>
 		p{
 			font-size: 24px;
 		}
 	</style>
 </head>
 <body>
 	<div>
 		<h1>DASHBOARD</h1>
 		<h2>BIENVENIDO: <?php echo $_SESSION['nombre'] ?> </h2>
 		<h3>ROL: <?php echo $_SESSION['rol'] ?> </h3>
 		<p>
 			El DASHBOARD es el tablero de control al cual sólo puede ingresar
 			el WEBMASTER y el propietario, los cuales tendrían el rol de admin.
 			Acá se pueden hacer todo el CRUD de la base de datos además de navegar
 			a todas las páginas del sitio.
 		</p>

 		<button type="submit" onclick="listarUsuarios()">VER USUARIOS</button><br><br>
 		<button type="submit" onclick="listarCajeros()">VER CAJEROS</button><br><br>


 		<form action="logout.php" method="POST">
			<button type="submit">CERRAR SESION</button>
		</form>
 	</div>
 	<div>
 		<h3>Lista de Usuarios</h3>
 		<div id="tablaUsuarios">
 			
 		</div>
 		<h3>Lista de Cajeros</h3>
 		<div id="tablaCajeros">
 			
 		</div>

 		
 	</div>
 </body>
 <script type="text/javascript">
 		function listarUsuarios(){
 			const XHR = new XMLHttpRequest();
		XHR.onload=function(){
			document.getElementById("tablaUsuarios").innerHTML=XHR.responseText
		}
		XHR.open("GET","presentarUsuarios.php",true);
		XHR.send();
 		}

 		function listarCajeros(){
 			const XHR = new XMLHttpRequest();
		XHR.onload=function(){
			document.getElementById("tablaCajeros").innerHTML=XHR.responseText
		}
		XHR.open("GET","presentarCajeros.php",true);
		XHR.send();
 		}
 </script>
 </html>