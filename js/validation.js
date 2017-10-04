function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x == "") {
        alert("Username must be filled out");
        return false;
    }

    var y = document.forms["myForm"]["pass"].value;
    if (y == "") {
        alert("Password must be filled out");
        return false;
    }
}

function validateForm1() {
  var a = document.forms["register-form"]["fullname"].value;
  if (a == "") {
      alert("Full name must be filled out");
      return false;
  }

  if (a.length > 20) {
    alert("Full name must be filled with maximum 20 characters");
    return false;
  }

  var b = document.forms["register-form"]["pass"].value;
  if (b == "") {
      alert("Password must be filled out");
      return false;
  }

  var c = document.forms["register-form"]["cpass"].value;
  if (c == "") {
      alert("Confirm password must be filled out");
      return false;
  }

  if (b != c) {
    alert("The password doesn't match!");
    return false;
  }

  var d = document.forms["register-form"]["phone"].value;
  if (d == "") {
      alert("Phone number must be filled out");
      return false;
  }

  if (d.length < 9 || d.length > 12) {
    alert("Phone number must be filled with 9-12 digits number");
    return false;
  }
}

function validateForm2() {
  var e = document.forms["myForm2"]["pickup"].value;
  if (e == "") {
      alert("Picking point must be filled out");
      return false;
  }

  var f = document.forms["myForm2"]["dest"].value;
  if (f == "") {
      alert("Destination must be filled out");
      return false;
  }
}

function validate(field, query) {
  var xmlhttp;

  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
      document.getElementById(field).innerHTML = "Validating..";
    } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById(field).innerHTML = xmlhttp.responseText;
    } else {
      document.getElementById(field).innerHTML = "Error Occurred. <a href='signup.php'>Reload Or Refresh</a> the page.";
    }
  }

  xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
  xmlhttp.send();
}