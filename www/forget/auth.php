<?php 

session_start();

include('../connection/connection.php');

if(isset($_POST['email']))
{
	$username = $_POST['email'];
	
	$query = "SELECT username FROM login WHERE username = '". $username ."'";

	if( $result = mysqli_query( $mysqli, $query ) )
	{
		if( mysqli_num_rows($result) == 1 )
		{
			$string = "Email exists";
			$_SESSION['current_email'] = $username;
			header("Location: reset_pass.php");
			exit();
		}
		else
		{
			$string = "Email not exists";
		}
	}
}

	if(isset($_POST['forget']))
	{
		$not_exist = "Email is not exist";
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
<body>

<h2>Reset password</h2>
<form method="POST" action="">
	<input type="text" name="email" class="email" placeholder="Enter email"></input>
	<div class="not_exist" name="not_exist"><?php if(isset($string)) { echo $string; } ?></div>
	<button name="forget" class="btn btn-primary">Reset Password</button>
</form>

</body>
</html>