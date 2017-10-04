<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="icon.png" />
  <title>Ojek Panas | Profile</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="floating-box-left">
    <img src="logo.png" width="280px" height="95px">
  </div>
  <ul class="centered">
    <li class="list-item">
  </ul>
  <div class="floating-box-right">
    <span>Hi, <b>
    <?php
      require 'connection.php';
      $query = "SELECT username FROM user WHERE id='$_SESSION[id]';";
      $result = $mysqli->query($query);
      if (!$result) exit("The query failed!");
      else {
        $row = $result->fetch_assoc();
        echo $row['username'];
      } 
    ?>
    </b> !</span><br>
    <a href=#logout>Logout</a>
  </div>
</body>
</html>