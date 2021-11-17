<?php 
//Datos para la conexión a la base de datos.
$serverDB="localhost";
$userDB="root";
$passDB="";
$nameDB="gran-casino";

//Establecemos la conexion con la base de datos
$con=mysqli_connect($serverDB,$userDB,$passDB,$nameDB);
//Si no se pudo conectar lanzamos un error y salimos.
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

/*
$sql="INSERT INTO personas(id,nombre,apellido,telefono,email,password,rol,fecha)
            VALUES(null,'$nombre','$apellido','$telefono','$email','$confirmpass','$rol','$fecha')";
*/

/*
Para evitar inyecciones SQL uso el PREPARED STATEMENTS
*/            

//Preparamos el statement
$stmt=$con->prepare("INSERT INTO personas(nombre,apellido,telefono,email,password,rol,fecha) VALUES(?,?,?,?,?,?,?)");

//Unimos los parámetros al statement            
$stmt->bind_param("sssssss",$miNombre,$miApellido,$miTelefono,$miEmail,$miConfirmpass,$miRol,$miFecha);

//Los remplazamos los placeholders (?) con los respectivos valores
$miNombre=$_POST['nombre'];
$miApellido=$_POST['apellido'];
$miTelefono=$_POST['telefono'];
$miEmail=$_POST['email'];
$miConfirmpass=$_POST['confirmPassword'];
$miRol=$_POST['radio'];
$miFecha=date('Y-m-d');

//Ejecutamos la consulta SQL: insertamos los datos en la base de datos.
if($stmt->execute()){
//Si la consulta fue exitosa iniciar la sesión
	session_start();
	$_SESSION['nombre']=$miNombre;
	$_SESSION['rol']=$miRol;
//Dirigimos al donde corresponda a cada usuario:
	if($miRol=="usuario"){
		header('Location: users.php');
	}
	if($miRol=="cajero"){
		header('Location: cajeros.php');
	}else{
		echo stmt->error;
	}		
};

//Cerramos el statement
$stmt->close();

//Cerramos la conexión.
$con->close();



          



/*
// Perform a query, check for error
if (!$mysqli -> query($sql)) {
  echo("Error description: " . $mysqli -> error);
}else{
	session_start();
	$_SESSION['nombre']=$nombre;
	$_SESSION['rol']=$rol;
	if($rol=="usuario"){
		header('Location: users.php');
	}
	if($rol=="cajero"){
		header('Location: cajeros.php');
	}
}
*/
/*
$mysqli -> close();
*/


 ?>
 