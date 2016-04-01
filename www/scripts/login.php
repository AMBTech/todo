<?php 

session_start();

include('../connection/connection.php');

if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM login WHERE username='" . $username . "' AND password='" . MD5($password) . "'";

	if($result = $mysqli->query($query))
	{
		$FullName = mysqli_fetch_row($result)[1];
		

		$row_cnt = $result->num_rows;
		

		if($row_cnt == 1)
		{
			// echo "Successfully logged in";
			$_SESSION['username'] = strtoupper($FullName);
			header("Location: ../home.php");
			exit();
		}
		else
		{
			$_SESSION['invalid_username'] = "Invalid Username or Password";
			header("Location: ../index.php");
		}
	}
}


 ?>