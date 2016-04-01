<?php 
	
include("../connection/connection.php");

	session_start();

	if(isset($_POST['btn_reset']))
	{
		$pass = $_POST['pass'];
		$repass = $_POST['repass'];

		$email = $_SESSION['current_email'];


		if($pass == $repass)
		{
			$query = "UPDATE login SET password = '". MD5($pass) ."', repass = '". MD5($repass) ."' 
				WHERE username = '". $email ."'";

			if( $result = mysqli_query( $mysqli, $query ) )
			{
				// echo $mysqli->affected_rows;
				$name = mysqli_fetch_row($result)[1];
				$email = mysqli_fetch_row($result)[2];
				$subject = "Password changed";

				$msg = "Hello " . $name . "<br>Your password is changed successfully.<br><br>Regards";
				mail($email, $subject, $msg);
				
				header("Location: ../index.php");
			}
			else
			{
				echo "Error";
			}
		}
		else
		{
			echo "Both password should be same.";
		}
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
</head>
<body>

<h2>Type your new password</h2>

<form method="POST" action="">
	<input type="password" name="pass" id="pass" placeholder="Enter Password"></input>
	<input type="password" name="repass" id="repass" placeholder="Re-Enter Password"></input>
	<button class="btn btn-primary" name="btn_reset" id="btn_reset">Reset Password</button>
</form>

</body>
</html>