<?php 

session_start();

include ('../connection/connection.php');

$duplicate = false;

if(isset($_POST['signup'])) {

	$name = $_POST['fullname'];
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$repass = $_POST['repass'];
	$city = $_POST['city'];
	$country = $_POST['country'];

	

	$create_query = "CREATE Table IF NOT EXISTS login (
	id integer(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	username VARCHAR(25) NOT NULL,
	password CHAR(50) NOT NULL,
	repass CHAR(50) NOT NULL,
	city VARCHAR(25),
	country VARCHAR(25) )";

	$duplicateQuery = "SELECT username FROM login WHERE username = '". $username ."'";

	$temp = "INSERT INTO login (name, username, password, repass, city, country) VALUES ( '%s', '%s', '%s', '%s', '%s', '%s')";

	$query = sprintf( $temp, $name, $username, MD5($pass), MD5($repass), $city, $country );


	if( $result = mysqli_query( $mysqli, $duplicateQuery ) )
	{
		echo "<br>num rows" . mysqli_num_rows($result) . "<br>";
		if( mysqli_num_rows($result) == 1 )
			$duplicate = true;
	}
	else
	{
		$duplicate = false;
	}



	if($duplicate == true)
	{
		echo "Username taken.";
		header('Location: signup.php');
	}
	else
	{

		if( $result = mysqli_query($mysqli, $query) )
		{
			$count = mysqli_affected_rows($mysqli);

			echo $count;
		}
		else
		{
			echo mysqli_error($mysqli);
		}
	}

	/*if( mysqli_query($mysqli, $create_query) )
	{
		if( $result = mysqli_query($mysqli, $duplicateQuery) )
		{

			if( mysqli_num_rows($result) > 1 )
			{
				echo "Username taken.";
			}
			else
			{
				echo "Not duplicate <br>";
				// echo $query;
				if( $result = mysqli_query($mysqli, $query) )
				{
					echo "Account created";
					// if(mysqli_num_rows($result) == 1)
				}
				else
				{
					echo mysqli_error($mysqli);
				}
			}
		}
		
	}*/




/*	if (! mysqli_query($mysqli, $create_query))
	{
		if( $result = $mysqli->duplicateQuery )
		{
			if($result->num_rows > 0)
			{
				echo "Username taken.";
			}
			else
			{
				if( $result = $mysqli->query )
				{
					if( $result->num_rows > 1 )
					{
						echo 'true';
					}
					else
					{
						echo 'false';
					}
				}
			}
		}
	}
	else if (mysqli_query($mysqli, $create_query))
	{
		if( $result = $mysqli->duplicateQuery )
		{
			if($result->num_rows > 0)
			{
				echo "Username taken.";
			}
			else
			{
				if( $result = $mysqli->query )
				{
					if( $result->num_rows > 1 )
					{
						echo 'true';
					}
					else
					{
						echo 'false';
					}
				}
			}
		}
	}*/

}



	
		
	
	
	
	

	/*if( $result = $mysqli->query($create_query) ){

		echo "Num rows " . $result->num_rows;
	}*/



 ?>