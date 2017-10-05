<?php
  require 'preliminarycheck.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="img/icon.png" />
  <title>Ojek Panas | Order</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="navbar">
    <?php include("navbar.php"); ?>
    <div class="after-box">
      <ul class="centered">
        <li class="active"><a href="order.php">ORDER</a>
        <li class="list-item"><a href="historyorder.php">HISTORY</a>
        <li class="list-item"><a href="profile.php">MY PROFILE</a>
      </ul>
    </div>
  </div>

  <div id="order-header">
    <div class="floating-box-left-mo">MAKE AN ORDER</div>
      <ul class="list-centered">
        <li class="list-order"><div class="circle">1</div>Select Destination</li>
        <li class="list-order"><div class="circle">2</div>Select a Driver</li>
        <li class="order-active"><div class="circle">3</div>Complete Your Order</li>
      </ul>
  </div>

  <div id="order-content">
    <div class="floating-box-left-o">HOW WAS IT?</div><br><br><br><br><br>
    <img class="picture-o" src="img/fish.png">
    <p class="username">@pikapikapikachu</p>
    <p class="data">Pikachu Smith</p>
    <div class="star">
      <form action="">
        <input class="star star-5" id="star-5" type="radio" name="star"/>
        <label class="star star-5" for="star-5"></label>
        <input class="star star-4" id="star-4" type="radio" name="star"/>
        <label class="star star-4" for="star-4"></label>
        <input class="star star-3" id="star-3" type="radio" name="star"/>
        <label class="star star-3" for="star-3"></label>
        <input class="star star-2" id="star-2" type="radio" name="star"/>
        <label class="star star-2" for="star-2"></label>
        <input class="star star-1" id="star-1" type="radio" name="star"/>
        <label class="star star-1" for="star-1"></label>
      </form>
    </div>
  </div>

  <div id="comment-page">
    <form method="POST">
      <textarea class="input-text-long" type="text" name="pref" id="pref" maxlength="200" placeholder="  Your Comment..."></textarea><br>
      <div class="button">COMPLETE ORDER</div>
    </form>
  </div>
</body>
</html>
