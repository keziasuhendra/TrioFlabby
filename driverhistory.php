<?php
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
                <li class="list-item"><a href="order.php?id_active=<?php echo $_GET['id_active']; ?>">ORDER</a>
                <li class="active"><a href="historyorder.php?id_active=<?php echo $_GET['id_active']; ?>">HISTORY</a>
                <li class="list-item"><a href="profile.php?id_active=<?php echo $_GET['id_active']; ?>">MY PROFILE</a>
            </ul>
        </div>
    </div>
    <div class="floating-box-left-mo2">TRANSACTIONS HISTORY</div>
    <div id="mini-navbar">
	    <table>
	    	<tr>
					<td class="mini-navbar"><a href="historyorder.php?id_active=<?php echo $_GET['id_active']; ?>">MY PREVIOUS ORDERS</a></td>
	    		<td class="selected-navbar"><a href="driverhistory.php?id_active=<?php echo $_GET['id_active']; ?>">DRIVER HISTORY</a></td>
	    	</tr>
	    </table>
    </div>
    <div class="empty-space"></div>
    <?php
        require 'connection.php';
        $id = $_GET['id_active'];
        $sql = "SELECT * FROM orderhistory WHERE id_driver=$id";
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
                            <td rowspan="6" width="28"><img class="square-image" src='.$rowc['img_path'].' alt="User Profile"></td>
                            <td rowspan="6" class="horizontal-space" width="10px"></td>
                            <td colspan="2" class="history-date">';
                $loopResult .= date('l, F jS Y',strtotime($row['order_date']));
                $loopResult .= '</td>
                            <td width="100" rowspan="2"><button class="hide-button">HIDE</button></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="history-driver-name">'.$rowc['fullname'].'</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="history-route">Saffron City-Pewter City</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="history-rating">gave <font color="orange">'.$row['rating'].'</font> stars for this order</td>
                        </tr>
                        <tr>
                            <td colspan="2">and left comment:</td>
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
            echo '<div class="nothing">Nothing to display :(</div>';
        }
        $mysqli->close();
    ?>
</body>
</html>
