<?php 
$serverDB="localhost";
$userDB="root";
$passDB="";
$nameDB="gran-casino";



$con = mysqli_connect($serverDB,$userDB,$passDB,$nameDB);

$sql="SELECT * FROM personas WHERE rol='usuario'";

$res=mysqli_query($con,$sql);

$cad="<table>";
while($fila=mysqli_fetch_assoc($res)){
	$cad.="<tr><td>".$fila['nombre']."</td><td>".$fila['apellido']."</td></tr>";
}
$cad.="</table>";


echo $cad;


 ?>