<?php 

	session_start();

	if( isset( $_SESSION['username'] ) )
	{
		$_SESSION = array();
		session_unset();
		session_destroy();
		header("Location: ../index.php");
	}
	else
	{
		header("Location: ../index.php");
	}
 ?>