<?php
	require 'connection.php';
	if (isset($_POST['addloc'])) {
		$newloc = $_POST['newloc'];
		$id = $_GET['id_active'];
		$sql = ("INSERT INTO preferredlocation (id, location) VALUES ('$id', '$newloc')");
		if ($mysqli->query($sql) === true) {
			/*echo "<script>alert('New location added');</script>";*/
		} else {
			/*echo "<script>alert('Failed to add new location');</script>";*/
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="icon.png" />
	<title>Ojek Panas | Edit</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./js/editlocation.js"></script>
</head>
<body>
	<div class="edit-title">
        <span>EDIT PREFERRED LOCATIONS</span>
    </div>
    <div id="edit-profile-content">
    	<div id="edit-location-list">
    		<table id="preferredlocation" class="border-table" width="550px">

		    	<tr>
		    		<th>No</th>
		    		<th>Location</th>
		    		<th colspan="2">Actions</th>
		    	</tr>
		    	<?php
		    	    require 'connection.php';
		    	    $id = $_GET['id_active'];
					$sql = "SELECT * FROM preferredlocation WHERE id=$id";
					$result = $mysqli->query($sql);

					if ($result->num_rows > 0) {
						$loopResult = '';
						$counter = 1;
						// output data of each row
						while($row = $result->fetch_assoc()) {
							$loopResult .= '<tr>
					    		<td>'.$counter.'</td>
					    		<td>'.$row['location'].'</td>
					    		<td class="pencil-image"><img width="20px" height="20px" id="'.$counter.'" name="pencil" onclick="changeImage()" src="pencil.png"></td>
					    		<td class="cancel-image"><img src="cancel.png" width="20px" height="20px" id="'.$counter.'" name="cancel"></td>
					    	</tr>';
					    	$counter++;
						}
					    echo $loopResult;
					} else {
						echo "Nothing to display :(";
					}
					$mysqli->close();
				?>
		    </table>
		    <div class="small-empty-space"></div>
    		<div class="small-title">
        		<span>ADD NEW LOCATIONS:</span>
    		</div>
    		<form method="POST" action="editlocation.php?id_active=<?=$_GET['id_active']?>">
    			<table width="550px">
    				<tr>
    					<td>
    						<input class="text-field" type="text" name="newloc" id="newloc" required>
    					</td>
    					<td><button class="save-button" name="addloc">ADD</button></td>
    				</tr>
    			</table>

    		</form>
    		<div class="small-empty-space"></div>
    		<input type="button" class="back-button" value="BACK" onclick="window.location.href='profile.php'">
    	</div>

    </div>

</body>
</html>

<script type="text/javascript" language="javascript">
	$(document).on('click', '.cancel', function() {

	});
	/*$(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"delete.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });
 });*/
</script>
