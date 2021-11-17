<?php 
$serverDB="localhost";
$userDB="root";
$passDB="";
$nameDB="gran-casino";


/*
$cnx = mysqli_connect($serverDB,$userDB,$passDB,$nameDB);

// Check connection
if ($cnx->connect_error) {
  die("Connection failed: " . $cnx->connect_error);
}
*/

$mysqli = new mysqli($serverDB,$userDB,$passDB,$nameDB);

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

 ?>