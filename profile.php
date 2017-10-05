<?php
  require 'preliminarycheck.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="icon.png" />
  <title>Ojek Panas | Profile</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="navbar">
    <?php include("navbar.php"); ?>
    <div class="after-box">
      <ul class="centered">
        <li class="list-item"><a href="order.php?id_active=<?php echo $_SESSION['id']; ?>">ORDER</a>
        <li class="list-item"><a href="historyorder.php?id_active=<?php echo $_SESSION['id']; ?>">HISTORY</a>
        <li class="active"><a href="profile.php?id_active=<?php echo $_SESSION['id']; ?>">MY PROFILE</a>
      </ul>
    </div>
  </div>

  <div id="profile-header">
    <div class="floating-box-left-p">
      <span>MY PROFILE</span>
    </div>
    <div class="floating-box-right-p">
      <a href="editprofile.php?id_active=<?php echo $_SESSION['id']; ?>"><img src="pencil.png" width="30px" height="30px"></a>
    </div>
  </div>

  <div id="profile-content">
    <?php
      require 'connection.php';
      $query = "SELECT * FROM user WHERE id=$_SESSION[id]";
      $result = $mysqli->query($query);
      if (!$result) {
        exit("The query failed!");
      }
      $row = $result->fetch_assoc();

      $query_pl = "SELECT * FROM preferredlocation WHERE id=$_SESSION[id]";
      $result_pl = $mysqli->query($query_pl);
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
      <?php
        if ($result_pl->num_rows > 0) {
          $printpl = '';
          while ($row_pl = $result_pl->fetch_assoc()) {
            $printpl .= '<div id="triangle"><ul><li>'.$row_pl['location'];
          }
          for ($i = 0; $i < $result_pl->num_rows; $i++) {
            $printpl .= '</li></ul></div>';
          }
          echo $printpl;
        }
      ?>
    </div>
    <div class="floating-box-right-p">
      <a href="editlocation.php?id_active=<?php echo $_SESSION['id']; ?>"><img src="pencil.png" width="30px" height="30px"></a>
    </div>
  </div>
</body>
</html>
