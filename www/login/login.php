<?php 

session_start();

// include('connection/connection.php');

if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM login WHERE username='" . $username . "' AND password='" . $password . "'";

	if($result = $mysqli->query($query))
	{
		$row_cnt = $result->num_rows;

		if($row_cnt == 1)
		{
			echo 'everything is OK';
		}
	}
}


 ?>