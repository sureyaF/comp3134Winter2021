<!DOCTYPE html>
<html>
  <head lang ="en">
  <meta charset ="UTF-8">
  <script language="JavaScript">
    function showInput() {
        document.getElementById('display').innerHTML =
                    document.getElementById("user_input").value;
    }
  </script>

  </head>
<body>

  <form>
    <label><b>Intro to Cyber Security</b></label>
    <br></br>Name: <input type ="text" name ="message" id ="user_input">
  </form>

  <input type ="submit" value = "Display"onclick ="showInput();"><br/>
  <!DOCTYPE html>
<html>
  <head lang ="en">
  <meta charset ="UTF-8">
  <script language="JavaScript">
    function showInput() {
        document.getElementById('display').innerHTML =
                    document.getElementById("user_input").value;
    }
  </script>

  </head>
<body>

  <form method="post">
    <label><b>Intro to Cyber Security</b></label>
    <br></br>Name: <input type ="text" name ="message" id ="user_input">
  </form>

  <input type ="submit" value = "Display"onclick ="showInput();"><br/>
<?php
  $name = $_POST['message'];
  if (empty($name)) {
      echo "Name is empty";
  } else {
      echo $name;
  }

?>
