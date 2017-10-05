<?php
$value = $_GET['query'];
$formfield = $_GET['field'];

$con = mysqli_connect('localhost','root','','trioflabby');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"trioflabby");

if ($formfield == "username") {
  if ($value == "" || strlen($value) < 5) {
    echo "<span style='color:red;'>&#x2716;</span>";
  } else {
    $sql="SELECT * FROM user WHERE username = '".$value."'";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>=1){
        echo "<span style='color:red;'>&#x2716;</span>";
    } else {
        echo "<span>&#10004;</span>";
    }
  }
}

if ($formfield == "email") {
  if ($value == "") {
    echo "<span style='color:red;'>&#x2716;</span>";
  } else {
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
      echo "<span style='color:red;'>&#x2716;</span>";
    } else {
      $sql="SELECT * FROM user WHERE email = '".$value."'";
      $result = mysqli_query($con,$sql);

      if(mysqli_num_rows($result)>=1){
          echo "<span style='color:red;'>&#x2716;</span>";
      } else {
          echo "<span>&#10004;</span>";
      }
    }
  }
}
mysqli_close($con);
?>
