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
					$sql = "SELECT * FROM preferredlocation WHERE id=1";
					$result = $mysqli->query($sql);

					if ($result->num_rows > 0) {
						$loopResult = '';
						$counter = 1;
						// output data of each row
						while($row = $result->fetch_assoc()) {
							$loopResult .= '<tr>
					    		<td>'.$counter.'</td>
					    		<td>'.$row['location'].'</td>
					    		<td class="pencil-image"><img width="20px" height="20px" id="editsave" name="pencil" onclick="changeImage()" src="pencil.png"></td>
					    		<td class="cancel-image"><img src="cancel.png" width="20px" height="20px"></td>
					    	</tr>';
					    	$counter++;
						}  
					    echo $loopResult;
					} else {
						echo "Nothing to display :(";
					}
					$mysqli->close();
				?>
		    
		    	<!-- <tr>
		    		<td>1</td>
		    		<td>Pewter City</td>
		    		<td class="pencil-image"><img width="20px" height="20px" id="editsave" name="pencil" onclick="changeImage()" src="pencil.png"></td>
		    		<td class="cancel-image"><img src="cancel.png" width="20px" height="20px"></td>
		    	</tr>
		    	<tr>
		    		<td>2</td>
		    		<td>Saffron City</td>
		    		<td class="pencil-image"><img width="20px" height="20px" id="editsave" name="pencil" onclick="changeImage()" src="pencil.png"></td>
		    		<td class="cancel-image"><img src="cancel.png" width="20px" height="20px"></td>
		    	</tr>
		    	<tr>
		    		<td>3</td>
		    		<td>SkyPillar Tower</td>
		    		<td class="pencil-image"><img width="20px" height="20px" id="editsave" name="pencil" onclick="changeImage()" src="pencil.png"></td>
		    		<td class="cancel-image"><img src="cancel.png" width="20px" height="20px"></td>
		    	</tr> -->
		    </table>
		    <div class="small-empty-space"></div>
    		<div class="small-title">
        		<span>ADD NEW LOCATIONS:</span>
    		</div>
    		<form method="POST">
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
