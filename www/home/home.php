<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome Home</title>

	<style type="text/css">
		/*ul { list-style: none; padding: 0px; margin: 0px; width: 500px;  }
		li { background-color: #eee;  }*/
	</style>


</head>
<body>

<?php include_once('header/header.php'); ?>

<div class="container todo_list">
	<ul>
		<li>
			<p> <input type="checkbox"></input> First task <button class="btn btn-prmiary btn-xs" style="">Delete</button></p>
		</li>
		<!-- <li>
			<p>First task</p> <button class="btn btn-prmiary" style="position: absolute; margin-top: -40px; margin-left: 60px;">Delete</button>
		</li>
		<li>
			<p>First task</p> <button class="btn btn-prmiary" style="position: absolute; margin-top: -40px; margin-left: 60px;">Delete</button>
		</li> -->
	</ul>
</div>

<h1>Welcome 
<?php 
	if(isset($_SESSION["username"])) 
		echo $_SESSION["username"]; 
	
	?>
</h1>

<form method="POST" action="signout/logout.php">
	<button class="btn btn-primary" name="login_status" id="login_status" onclick="func()">
		<?php
			if(isset($_SESSION['username']))
				echo 'Sign Out';
			else
				echo 'Log In';
		?>
	</button>
</form>

</body>
</html>