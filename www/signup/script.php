<?php 

session_start();

include ('../connection/connection.php');

if(isset($_POST['signup'])) {

	$name = $_POST['fullname'];
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$repass = $_POST['repass'];
	$city = $_POST['city'];
	$country = $_POST['country'];

	$temp = "INSERT INTO login name = %s, username = %s, password = %s, repass = %s, city = %s, country = %s";

	$query = sprintf( $temp, $name, $username, MD5($pass), MD5($repass), $city, $country );
}

	$create_query = "CREATE Table login (
	id integer(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	username VARCHAR(25) NOT NULL,
	password VARCHAR(25) NOT NULL,
	repass VARCHAR(25) NOT NULL,
	city VARCHAR(25),
	country VARCHAR(25) )";

// echo "Num rows ";
	
	if (! mysqli_query($mysqli, $create_query))
	{
		// echo "Error creating table: " . mysqli_error($mysqli);
		
	}
	

	/*if( $result = $mysqli->query($create_query) ){

		echo "Num rows " . $result->num_rows;
	}*/



 ?>