<?php 

$myEmail=$_POST['email'];



$serverDB="localhost";
$userDB="root";
$passwordDB="";
$nameDB="gran-casino";

//hago la conexión con la BD
$con=mysqli_connect($serverDB,$userDB,$passwordDB,$nameDB);
//formulo la consulta: busco el nombre y el apellido
//que coincida con el email que ingresó el usuario
$sql="SELECT nombre, apellido FROM personas WHERE email='$myEmail'";
//ejecuto la consulta
$res=mysqli_query($con,$sql);
//calculo el número de filas que contiene
//el resultado $res de la consulta
$numFil=mysqli_num_rows($res);

//si el número de filas es mayor que cero
//significa que el usuario existe.  

//Entonces vamos a generar una una nueva
//clave aleatoria.  Luego la guardamos en la
//base de datos y finalmente le enviamos
//la nueva clave al usuario por email.

echo "Numero de filas: ".$numFil;
if($numFil>0){
	//generamos la clave
	$cad1="abcdefghijklmnopqrstuvwxyz0123456789";
	$cad3=str_shuffle($cad1);
	$clave=substr($cad3,0,6);
	//formulo la consulta para actualizar la clave en la BD
	$sql2="UPDATE personas SET password='$clave' WHERE email='$myEmail'";
	//ejecuto la consulta.  Actualizo la BD con la nueva clave.
	mysqli_query($con,$sql2);
	//envío al usuario la nueva clave
	echo "Enviando un mail al usuario con la nueva clave...";
}else{
	//si el mail no está registrado se dirige
	//el usuario al index
	header('Location:index.php');


}







?>






