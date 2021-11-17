<?php 
session_start();

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REGISTRO</title>
</head>
<body>
	<div>
		<h1>REGISTRO</h1>
	</div>
	<form id="formaRegistro" action="registroAction.php" method="POST">
		<label for="usuario">USUARIO</label>
    	<input id="usuario" type="radio" name="radio" value="usuario"><br><br>

    	<label for="cajero">CAJERO</label>
    	<input id="cajero" type="radio" name="radio" value="cajero"><br><br>
    	<hr>
    	<label for="nombre">Nombre</label><br>
		<input id="nombre"type="text" name="nombre" placeholder="Tu nombre"><br><br>

		<label for="apellido">Apellido</label><br>
		<input id="apellido"type="text" name="apellido" placeholder="Tu apellido"><br><br>
		
		
		<label for="telefono">Teléfono</label><br>
		<input id="telefono"type="tel" name="telefono" placeholder="11 3265 9878"><br><br>
		
		<!--
		<label for="telefono">Teléfono:</label><br>
  		<input type="tel" id="telefono" name="telefono" placeholder="54 9 11 2263 8798"
  		pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br><br>
  		<small>Format: 54 9 11 2263 8798</small><br><br>
		-->		

		<label for="email">Email</label><br>
		<input id="email" type="email" name="email" placeholder="tuemail@mail.com">
		<span id="emailOK"></span>
		<br><br>

		<label for="clave">Clave</label><br>
		<input id="clave" type="password" name="password" placeholder="tu clave"><br><br>

        <label for="confirmarClave">Confirmar Clave</label><br>
        <input id="confirmarClave" type="password" name="confirmPassword" placeholder="tu clave otra vez"><span id="passOK"></span><br><br>

		<button id="btnRegistrar" class="btn btn-danger" type="submit" onclick="">REGISTRARME</button>



	</form>
	<script>
		
		document.getElementById("confirmarClave").addEventListener('input',confirmarClave)
		document.getElementById("email").addEventListener('input',validarEmail)
		
		let estado = false;
		function confirmarClave(){

			const clave= document.getElementById("clave").value.toString();
			const claveConf=document.getElementById("confirmarClave").value.toString();

			
			if(clave==claveConf){
			
				document.getElementById("passOK").innerHTML="<img src='redMark.png' style='width:30px; height:30px' alt='red mark'>"
			}else{
				document.getElementById("passOK").innerHTML=""
			}

		}


		function validarEmail(){
			//cargamos el valor del email del usuario
			let myEmail=document.getElementById("email").value			
            
			/*
				REFERENCIA: https://emailregex.com/
			*/
			const pattern=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i
			
			
			if(pattern.test(myEmail)){
				document.getElementById("emailOK").innerHTML="<img src='redMark.png' style='width:30px; 	height:30px' alt='red mark'>"
			}else{
				document.getElementById("emailOK").innerHTML=""
			}
		}



		
		
	</script>
</body>
</html>