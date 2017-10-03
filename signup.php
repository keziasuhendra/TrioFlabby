<?php
	require 'connection.php';
	session_start();
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if (isset($_POST['register']))
		{
			require 'signupprocess.php';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="icon.png" />
	<title>Ojek Panas | Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="signup-rectangle">
		<div class="title"><span>SIGN UP</span></div>
		<script src="validation.js"></script>
		<form name="register-form" action="signup.php" method="POST" name="myForm2" onsubmit="return validateForm()">
			<table class="form" border="0">
				<tr>
					<td><label class="label" for="fullname">Your Name</label></td>
					<td colspan="2"><input class="text-field" type="text" name="fullname" id="fullname" maxlength="20"></td>
				</tr>
				<tr>
					<td><label class="label" for="username">Username</label></td>
					<td><input class="small-text-field" type="text" name="username" id="username" maxlength="20"></td>
					<td><div class="check">&#x2716</div></td>
				</tr>
				<tr>
					<td><label class="label" for="email">Email</label></td>
					<td><input class="small-text-field" type="email" name="email" id="email" maxlength="20"></td>
					<td><div class="check">&#x2716</div></td>
				</tr>
				<tr>
					<td><label class="label" for="pass">Password</label></td>
					<td colspan="2"><input class="text-field" type="password" name="pass" id="pass" maxlength="20"></td>
				</tr>
				<tr>
					<td><label class="label" for="cpass">Confirm Password</label></td>
					<td colspan="2"><input class="text-field" type="password" name="cpass" id="cpass" maxlength="20"></td>
				</tr>
				<tr>
					<td><label class="label" for="phone">Phone Number</label></td>
					<td colspan="2"><input class="text-field" type="text" name="phone" id="phone" minlength="9" maxlength="12"></td>
				</tr>
			</table>
			<div class="form-group">
				<input class="checkbox-box" type="checkbox" name="is-driver" id="is-driver"><p class="checkbox-text">Also sign me up as a driver!</p>
			</div>
			<div class="empty-space"></div>

			<div class="block-container">
				<div class="no-account"><a href="index.php">Already have an account?</a></div>
				<button class="button" name="register" >REGISTER</button>
			</div>
		</form>
	</div>
</body>
</html>
