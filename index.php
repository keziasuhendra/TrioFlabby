<!-- <html>
<head>
<script>
function validate(field, query) {
  var xmlhttp;

  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  console.log(field);
  console.log(query);
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
      document.getElementById(field).innerHTML = "Validating..";
    } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
    } else {
      document.getElementById("txtHint").innerHTML = "Error Occurred. <a href='signup.php'>Reload Or Refresh</a> the page.";
    }
  }

  xmlhttp.open("GET", "getUser.php?field=" + field + "&query=" + query, true);
  xmlhttp.send();
}

function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<div id="signup-rectangle">
    <div class="title"><span>SIGN UP</span></div>
    <form name="register-form" action="signup.php" method="POST" onsubmit="return validateForm1()">
      <table class="form" border="0">
        <tr>
          <td><label class="label" for="fullname">Your Name</label></td>
          <td colspan="2"><input class="text-field" type="text" name="fullname" id="fullname"></td>
        </tr>
        <tr>
          <td><label class="label" for="username">Username</label></td>
          <td><input class="small-text-field" type="text" name="username" id="username" maxlength="20" onblur="validate('username', this.value)"></td>
          <td><div class="check">&#x2716</div></td>
        </tr>
        <tr>
          <td><label class="label" for="email">Email</label></td>
          <td><input class="small-text-field" type="email" name="email" id="email" maxlength="20" onblur="validate('email', this.value)"></td>
          <td><div class="check">&#x2716</div></td>
        </tr>
      
      </div>
    </form>

    <div id="txtHint"><b>Person info will be listed here...</b></div>
  </div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="icon.png" />
  <title>Ojek Panas | Sign Up</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script>
  function validate(field, query) {
    var xmlhttp;

    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    } else {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    console.log(field);
    console.log(query);
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
        document.getElementById(field).innerHTML = "Validating..";
      } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
      } else {
        document.getElementById("txtHint").innerHTML = "Error Occurred. <a href='signup.php'>Reload Or Refresh</a> the page.";
      }
    }

    xmlhttp.open("GET", "getUser.php?field=" + field + "&query=" + query, true);
    xmlhttp.send();
  }

  function showUser(str) {
      if (str == "") {
          document.getElementById("txtHint").innerHTML = "";
          return;
      } else {
          if (window.XMLHttpRequest) {
              // code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp = new XMLHttpRequest();
          } else {
              // code for IE6, IE5
              xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("txtHint").innerHTML = this.responseText;
              }
          };
          xmlhttp.open("GET","getuser.php?q="+str,true);
          xmlhttp.send();
      }
  }
  </script>
</head>
<body>
  <div id="signup-rectangle">
    <div class="title"><span>SIGN UP</span></div>
    <script src="js/validation.js"></script>
    <form name="register-form" action="signup.php" method="POST">
      <table class="form" border="0">
        <tr>
          <td><label class="label" for="fullname">Your Name</label></td>
          <td colspan="2"><input class="text-field" type="text" name="fullname" id="fullname"></td>
        </tr>
        <tr>
          <td><label class="label" for="username">Username</label></td>
          <td><input class="small-text-field" type="text" name="username" id="username" maxlength="20" onblur="validate('username', this.value)"></td>
          <td><div class="check">&#x2716</div></td>
        </tr>
        <tr>
          <td><label class="label" for="email">Email</label></td>
          <td><input class="small-text-field" type="email" name="email" id="email" maxlength="20" onblur="validate('email', this.value)"></td>
          <td><div class="check">&#x2716</div></td>
        </tr>
        <tr>
          <td><label class="label" for="pass">Password</label></td>
          <td colspan="2"><input class="text-field" type="password" name="pass" id="pass"></td>
        </tr>
        <tr>
          <td><label class="label" for="cpass">Confirm Password</label></td>
          <td colspan="2"><input class="text-field" type="password" name="cpass" id="cpass"></td>
        </tr>
        <tr>
          <td><label class="label" for="phone">Phone Number</label></td>
          <td colspan="2"><input class="text-field" type="text" name="phone" id="phone"></td>
        </tr>
      </table>
      <div class="form-group">
        <input class="checkbox-box" type="checkbox" name="is-driver" id="is-driver"><p class="checkbox-text">Also sign me up as a driver!</p>
      </div>
      <div class="empty-space"></div>

      <div class="block-container">
        <div class="no-account"><a href="index.php">Already have an account?</a></div>
        <button class="button" name="register" value="submit">REGISTER</button>
      </div>
    </form>
    <div id="txtHint"><b>Person info will be listed here...</b></div>
  </div>
</body>
</html>
