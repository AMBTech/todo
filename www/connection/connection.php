<?php 

	$mysqli = mysqli_connect('localhost', 'root', '', 'todo');

	if($mysqli->connect_errno > 0)
	{
		die('Unable to connect to Database[' . $db->connect_errno . ']');
	}

 ?>