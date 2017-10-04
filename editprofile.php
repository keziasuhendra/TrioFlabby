<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		require 'connection.php';
		if (isset($_POST['img']))
		{
			// put image to folder img/username.img
			// delete old img file in folder (unless default)
			// query update img path
		}
		if (isset($_POST['yourname']))
		{
			$updatedname = mysqli_real_escape_string($mysqli, $_POST['yourname']);
			$mysqli->query("UPDATE user SET fullname='$updatedname' WHERE id='". $_SESSION['id'] ."'");
			// query update name
		}
		if (isset($_POST['phone']))
		{
			// query update phone
		}
		// query update isdriver
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="icon.png" />
	<title>Ojek Panas | Edit</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div class="edit-title">
        <span>EDIT PROFILE INFORMATION</span>
    </div>
    <div id="edit-profile-content">
    <form method="POST">
    	<table>
	    	<tr>
	    		<td rowspan="2"><img class="square-image" src="fish.png" alt="Profile Picture"></td>
	    		<td class="horizontal-space"></td>
	    		<td class="bottom-table"><label class="label">Update profile picture</label></td>
	    	</tr>
	    	<tr>
	    		<td class="horizontal-space"></td>
	    		<td class="upper-table"><input type="file" name="img"></td>
	    	</tr>
	    	<tr>
	    		<td colspan="3" class="vertical-space"></td>
	    	</tr>
	    	<tr>
	    		<td><label class="label" for="yourname">Your Name</label></td>
	    		<td class="horizontal-space"></td>
	    		<td><input class="text-field" type="text" name="yourname" id="yourname" maxlength="20"></td>
	    	</tr>
	    	<tr>
	    		<td><label class="label" for="phone">Phone</label></td>
	    		<td class="horizontal-space"></td>
	    		<td><input class="text-field" type="text" name="phone" id="phone" minlength="9" maxlength="12"></td>
	    	</tr>
	    	<tr>
	    		<td><label class="label" for="phone">Status Driver</label></td>
	    		<td class="horizontal-space"></td>
	    		<td class="content-right">
		    		<label class="switch">
	  					<input type="checkbox" checked>
	  					<span class="slider round"></span>
					</label>
				</td>
	    	</tr>
	    	<tr>
	    		<td colspan="3" class="vertical-space"></td>
	    	</tr>
	    	<tr>
	    		<td><button class="back-button">BACK</button></td>
	    		<td class="horizontal-space"></td>
	    		<td><button class="save-button">SAVE</button></td>
	    	</tr>
	    </table>
    </form>
    </div>

</body>
</html>
