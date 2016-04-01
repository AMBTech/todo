<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
<body>

<?php include_once("header.php"); ?>

<h2>Reset password</h2>
<form method="POST" action="scripts/auth.php">
	<input type="text" name="email" class="email" placeholder="Enter email"></input>
	<div class="not_exist" name="not_exist"><?php if(isset($string)) { echo $string; } ?></div>
	<button name="forget" class="btn btn-primary">Reset Password</button>
</form>

</body>
</html>