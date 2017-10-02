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
	<title>Ojek Panas</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div id="signin-rectangle">
		<div class="title"><span>LOGIN</span></div>
		<form method="POST" action="index.php">
			<table class="form" border="0">
				<tr>
					<td><label class="label" for="username">Username</label></td>
					<td><input class="text-field" type="text" name="username" id="username" maxlength="20" required></td>
				</tr>
				<tr>
					<td><label class="label" for="pass">Password</label></td>
					<td><input class="text-field" type="password" name="pass" id="pass" maxlength="16" required></td>
				</tr>
			</table>
			<div class="empty-space"></div>
			<div class="block-container">
				<div class="no-account"><a href="profile.php">Don't have an account?</a></div>
				<button class="button" name="login">GO!</button>
			</div>
		</form>
	</div>
</body>
</html>
