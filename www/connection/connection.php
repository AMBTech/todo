<?php 

	$mysqli = new mysqli('localhost', 'root', '', 'todo');

	if($mysqli->connect_errno > 0)
	{
		die('Unable to connect to Database[' . $db->connect_errno . ']');
	}

 ?>