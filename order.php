<!DOCTYPE html>
<html>
<head>
  <title>Ojek Panas | Order</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="navbar">
    <script src="js/navbar.js" rel="javascript" type="text/javascript"></script>
    <div class="after-box">
      <ul class="centered">
        <li class="active"><a href="order.php">ORDER</a>
        <li class="list-item"><a href="historyorder.php">HISTORY</a>
        <li class="list-item"><a href="profile.php">MY PROFILE</a>
      </ul>
    </div>
  </div>

  <div id="order-header">
    <div class="floating-box-left-p">
      <span>MAKE AN ORDER</span>
    </div>
    <div class="after-box">
      <ul class="centered">
        <li class="order-active"><div class="circle">1</div>Select Destination</li>
        <li class="list-order"><div class="circle">2</div>Select a Driver</li>
        <li class="list-order"><div class="circle">3</div>Complete Your Order</li>
      </ul>
    </div>
  </div>

  <div id="order-page">
    <form method="POST">
      <table border="0">
        <tr>
          <td><label class="label-order" for="pickup">Picking Point</label></td>
          <td><input class="input-text" type="text" name="pickup" id="pickup" maxlength="200"></td>
        </tr>
        <tr>
          <td><label class="label-order" for="dest">Destination</label></td>
          <td><input class="input-text" type="text" name="dest" id="dest" maxlength="200"></td>
        </tr>
        <tr>
          <td><label class="label-order" for="pref">Preferred Driver</label></td>
          <td><input class="input-text" type="text" name="pref" id="pref" maxlength="200" placeholder="  (optional)"></td>
        </tr>
      </table><br>
      <!-- JANGAN LUPA ILANGIN A HREF CUMA BUAT TESTER -->
      <div class="button-center"><a href="selectdriver.php">NEXT</a></div>
    </form>
  </div>
</body>
</html>
