<!DOCTYPE html>
<html>
<head>
	<title>Ojek Panas</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript" src="./js/editlocation.js"></script>  
</head>
<body>
	<div class="edit-title">
        <span>EDIT PREFERRED LOCATIONS</span>
    </div>
    <div id="edit-profile-content">
    	<div id="edit-location-list">
    		<table class="border-table" width="550px">
    		<thread>
		    	<tr>
		    		<th>No</th>
		    		<th>Location</th>
		    		<th colspan="2">Actions</th>
		    	</tr>
		    </thread>
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
    	</div>
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
    
</body>
</html>