<?php 
session_start();
//include('database.php');

$myemail=$_POST['email'];
//remove blanks
$myemail=trim($myemail);
$mypassword=$_POST['password'];

echo $myemail."<br>";
echo $mypassword."<br>";

$serverDB="localhost";
$userDB="root";
$passDB="";
$nameDB="gran-casino";

$cnx = mysqli_connect($serverDB,$userDB,$passDB,$nameDB);

if ($cnx->connect_error) {
  die("Connection failed: " . $cnx->connect_error);
}
echo "Connected successfully";


$sql="SELECT * FROM personas";

$res= mysqli_query($cnx,$sql);

while($row=mysqli_fetch_assoc($res)){
	echo "id: ".$row['id']."<br>";
	echo "nombre: ".$row['nombre']."<br>";
	echo "apellido: ".$row['apellido']."<br>";
	echo "rol: ".$row['rol']."<br>";
}

$sql2="SELECT id,rol,nombre FROM personas WHERE email='$myemail' and password='$mypassword'";
$res2= mysqli_query($cnx,$sql2);
$count= mysqli_num_rows($res2);
echo "numero de filas: ".$count."<br>";

if($count>0){
	echo "INGRESO AUTORIZADO"."<br>";
	$row2=mysqli_fetch_array($res2);
	$myrol=$row2['rol'];
	$myname=$row2['nombre'];
	
	if($myrol=="usuario"){
		header('Location:users.php');		
		$_SESSION['rol']=$myrol;
		$_SESSION['nombre']=$myname;
	}
	if($myrol=="cajero"){
		header('Location:cajeros.php');		
		$_SESSION['rol']=$myrol;
		$_SESSION['nombre']=$myname;
	}

	if($myrol=="admin"){
		header('Location:dashboard.php');		
		$_SESSION['rol']=$myrol;
		$_SESSION['nombre']=$myname;
	}

	
}else{
	echo "INGRESO NO AUTORIZADO";
	header('Location:index.php');

}






 ?>
