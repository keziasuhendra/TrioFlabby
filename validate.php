<?php
  $value = $_GET['query'];
  $formfield = $_GET['field'];

  if ($formfield == "username") {
    if (strlen($value) < 5) {
      echo "<span>Must be more than 4 letters. <font color="red">&#10005;</font></span>";
    } else {
      echo "<span><font color="green">&#10004;</font></span>";
    }
  }

  if ($formfield == "email") {
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
      echo "<span>Email already exists! <font color="red">&#10005;</font></span>";
    }
  } else {
    echo "<span><font color="green">&#10004;</font></span>";
  }
?>