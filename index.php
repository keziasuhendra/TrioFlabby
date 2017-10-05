<?php
	require 'connection.php';
	session_start();

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if (isset($_POST['login']))
		{
			require 'loginprocess.php';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="img/icon.png" />
	<title>Ojek Panas | Login</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div id="signin-rectangle">
		<div class="title"><span>LOGIN</span></div>
		<script src="js/validation.js"></script>
		<form method="POST" action="index.php" name="myForm" onsubmit="return validateForm()">
			<table class="form" border="0">
				<tr>
					<td><label class="label" for="username">Username</label></td>
					<td><input class="text-field" type="text" name="username" id="username" maxlength="20"></td>
				</tr>
				<tr>
					<td><label class="label" for="pass">Password</label></td>
					<td><input class="text-field" type="password" name="pass" id="pass" maxlength="16"></td>
				</tr>
			</table>
			<div class="empty-space"></div>
			<div class="block-container">
				<div class="no-account"><a href="signup.php">Don't have an account?</a></div>
				<button class="button" name="login">GO!</button>
			</div>
		</form>
	</div>
</body>
</html>
