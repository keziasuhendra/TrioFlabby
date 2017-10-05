<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/icon.png" />
    <title>Ojek Panas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="floating-box-left">
        <img src="img/logo.png" width="280px" height="95px">
    </div>
    <ul class="centered">
        <li class="list-item">
    </ul>
    <div class="floating-box-right">
        <span>Hi, <b>
        <?php
            require 'connection.php';

            $query = "SELECT username FROM user WHERE id='$_GET[id_active]';";
            $result = $mysqli->query($query);
            if (!$result) {
                exit("The query failed!");
            } else {
                $row = $result->fetch_assoc();
                echo $row['username'];
            } 
        ?>
        </b> !</span><br>
    
        <form id="loqout" action="loqout.php" method="POST">
            <a href="javascript:;" onclick="document.getElementById('loqout').submit();">Logout</a>
        </form>
    </div>
</body>
</html>