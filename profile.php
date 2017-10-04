<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="icon.png" />
  <title>Ojek Panas | Profile</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="navbar">
    <script src="js/navbar.js" rel="javascript" type="text/javascript">
    </script>
    <div class="after-box">
      <ul class="centered">
        <li class="list-item"><a href="order.php">ORDER</a>
        <li class="list-item"><a href="historyorder.php">HISTORY</a>
        <li class="active"><a href="profile.php">MY PROFILE</a>
      </ul>
    </div>
  </div>

  <div id="profile-header">
    <div class="floating-box-left-p">
      <span>MY PROFILE</span>
    </div>
    <div class="floating-box-right-p">
      <a href="editprofile.php"><img src="pencil.png" width="30px" height="30px"></a>
    </div>
  </div>

  <div id="profile-content">
    <?php
      require 'connection.php';
      $sql = "SELECT * FROM user WHERE id=3";
      $result = $mysqli->query($sql);
      $row = $result->fetch_assoc();
    ?>
    <img class="picture" src="<?=$row['img_path']?>"/>
    <p class="username">@<?=$row['username']?></p>
    <p class="data"><?=$row['fullname']?></p>
    <?php
      if ($row['is_driver'] == 0) {
        echo '<p class="data">Non-Driver</p>';
      } else {
        $printed = '';
        $printed .= '<p class="data">Driver | <font color="orange">&#9734;'.$row['star']. '</font> (' .$row['vote']. ' votes)</p>';
        echo $printed;
      }
    ?>
    <p class="data">&#9993; <?=$row['email']?></p>
    <p class="data">&#9743; <?=$row['phone_num']?></p>
  </div>

  <div id="preferred-header">
    <div class="floating-box-left-l">
      <span>PREFERRED LOCATIONS:</span>
    </div>
    <div class="floating-box-right-p">
      <a href="editlocation.php"><img src="pencil.png" width="30px" height="30px"></a>
    </div>
    <div class="profile-prefered-location">
      
    </div>
  </div>
</body>
</html>
