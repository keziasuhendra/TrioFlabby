<?php
	$username = $mysqli->real_escape_string($_POST['username']);
	$result = $mysqli->query("SELECT * FROM user WHERE username='$username'");
	if ($result->num_rows == 0) {
		echo "<script>alert('Akun dengan username tersebut belum ada')</script>";
	} else {
		$user = $result->fetch_assoc();
		if (password_verify($_POST['pass'], $user['pass'])) {
			header("location: profile.php?id_active=$user[id]");
		} else {
			echo "<script>alert('Password salah!')</script>";
		}
	}
?>