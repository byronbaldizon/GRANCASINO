<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INDEX</title>
	<style>
		p{
			font-size: 20px;
		}
		th{
			background-color: dodgerblue;
			color:white;
			font-size: 24px;
		}
		th,td{
			border:solid 1px black;
			padding:10px;
		}
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<div>
		<h1>INGRESO</h1>
		<p>
			Esta es la página inicial.  Es el punto de ingreso al sitio.
			Para ingresar se pide el mail y el password.
		</p>
		<p>Esta tabla es para probar los diversos roles.  No va en el diseño final</p>
		<div>
			<table>
				<tr>
					<th>email</th>
					<th>clave</th>
                    <th>rol</th>
				</tr>
				<tr>
					<td>maria@gmail.com</td>
					<td>maria</td>
					<td>administrador</td>
				</tr>
				<tr>
					<td>juan@gmail.com</td>
					<td>juan</td>
					<td>cajero</td>
				</tr>
				<tr>
					<td>pedro@gmail.com</td>
					<td>pedro</td>
					<td>usuario</td>
				</tr>
			</table>
		</div>
		<br><br>
		
		<form action="indexAction.php" method="POST">
			<label for="email">EMAIL:</label><br>
			<input id="email" type="text" name="email"><br><br>

			<label for="password">CLAVE:</label><br>
			<input id="password" type="password" name="password"><br><br>

			<button type="submit">INGRESAR</button>
			<h4>Aun no te has registrado?</h4>
			<a href="registro.php">Haz click acá para registrarte</a><br><br>
			<a href="recuperarContrasena.php">Olvidé mi contraseña</a>

		</form>

	</div>
	<script>
		
	</script>		
</body>
</html>