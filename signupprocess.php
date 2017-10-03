<?php
	$fullname = $mysqli->escape_string($_POST['fullname']);
	$username = $mysqli->escape_string($_POST['username']);
	$email = $mysqli->escape_string($_POST['email']);
	$pass = $mysqli->escape_string(password_hash($_POST['pass'], PASSWORD_BCRYPT));
	$phone = $mysqli->escape_string($_POST['phone']);
	$isdriver = isset($_POST['is-driver']) ? 1 : 0;
	$result = $mysqli->query("SELECT * FROM user WHERE email='$email' OR username='$username'") or die($mysqli->error());
	if ($result->num_rows > 0) {
		echo "<script>alert('Akun Tersebut Sudah Ada !')</script>";
	} else {
		$sql = "INSERT INTO user (username, fullname, email, pass, phone_num, is_driver)". "VALUES ('$username', '$fullname', '$email', '$pass', '$phone', $isdriver)";
		$mysqli->query($sql);
		echo "<script>alert('Registrasi berhasil !')
		window.location = 'index.php'
		</script>";
	}
?>