<?php 

session_start();

include ('../connection/connection.php');


$id = 109;

$naam = 'Ammar';

$format = "My name is %s and id is %d";

$err = sprintf($format, $naam, $id);

echo $err;


if(isset($_POST['signup'])) {

	$name = $_POST['fullname'];
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$repass = $_POST['repass'];
	$city = $_POST['city'];
	$country = $_POST['country'];

	$temp = "INSERT INTO login name = %s, username = %s, password = %s, repass = %s, city = %s, country = %s";

	$query = sprintf( $temp, $name, $username, $pass, $repass, $city, $country );

	
}


 ?>