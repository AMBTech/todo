<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome Home</title>
</head>
<body>

<h1>Welcome 
<?php 
	if(isset($_SESSION["username"])) 
		echo $_SESSION["username"]; 
	
	?></h1>

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