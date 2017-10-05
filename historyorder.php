<?php
 	$filename = basename($_SERVER['PHP_SELF']);
  	require 'preliminarycheck.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="icon.png" />
	<title>Ojek Panas | History</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div id="navbar">
		<?php include("navbar.php"); ?>
    	<div class="after-box">
      		<ul class="centered">
				<li class="list-item"><a href="order.php?id_active=<?php echo $_SESSION['id']; ?>">ORDER</a>
		        <li class="active"><a href="historyorder.php?id_active=<?php echo $_SESSION['id']; ?>">HISTORY</a>
		        <li class="list-item"><a href="profile.php?id_active=<?php echo $_SESSION['id']; ?>">MY PROFILE</a>
      		</ul>
    	</div>
    </div>
    <div class="floating-box-left-mo2">TRANSACTIONS HISTORY</div>
    <div id="mini-navbar">
	    <table>
	    	<tr>
	    		<td class="selected-navbar"><a href="historyorder.php">MY PREVIOUS ORDERS</a></td>
	    		<td class="mini-navbar"><a href="driverhistory.php">DRIVER HISTORY</a></td>
	    	</tr>
	    </table>
    </div>
    <div class="empty-space"></div>
    <?php
        require 'connection.php';
        $id = $_GET['id_active'];
        $sql = "SELECT * FROM orderhistory WHERE id_customer=$id";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            $loopResult = '';
            $counter = 1;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $idc = $row['id_customer'];
                $sql_customer = "SELECT * FROM user WHERE id=$idc";
                $resultc = $mysqli->query($sql_customer);
                $rowc = $resultc->fetch_assoc();
                $idd = $row['id_driver'];
                $sql_driver = "SELECT * FROM user WHERE id=$idd";
                $resultd = $mysqli->query($sql_driver);
                $rowd = $resultd->fetch_assoc();
                $loopResult .= '<div class="history-list-item">
                    <table width="670px">
                        <tr>
                            <td rowspan="6" width="28"><img class="square-image" src='.$rowd['img_path'].' alt="Driver Profile"></td>
                            <td rowspan="6" class="horizontal-space" width="10px"></td>
                            <td colspan="2" class="history-date">Sunday, '.$row['order_date'].'</td>
                            <td width="100" rowspan="2"><button class="hide-button">HIDE</button></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="history-driver-name">'.$rowd['fullname'].'</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="history-route">Saffron City-Pewter City</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="history-rating">You rated: <font color="orange">&#9734;</font></td>
                        </tr>
                        <tr>
                            <td colspan="2">You commented:</td>
                        </tr>
                        <tr>
                            <td class="horizontal-space-small"></td>
                            <td colspan="2">'.$row['feedback'].'</td>
                        </tr>
                        <tr><td class="vertical-space"></td></tr>
                    </table>
                </div>';
                $counter++;
            }
            echo $loopResult;
        } else {
            echo "Nothing to display :(";
        }
        $mysqli->close();
    ?>
</body>
</html>
