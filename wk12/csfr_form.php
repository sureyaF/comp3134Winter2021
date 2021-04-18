<html>
<body>
<form>
    <label><b>Intro to Cyber Security</b></label>
    <br></br>Name: <input type ="text" name ="confrimation" id ="user_input">
  </form>

  <input type ="submit" value = "Display"onclick ="showInput();"><br/>
<?php
  $name = $_POST['confrimation'];
  if (empty($name)) {
      echo "Name is empty";
  } else {
      echo $name;
  }

?>

<div>Click on the submit button, and the input will be sent to a page 

</body>
</html>
<script>
    document.getElementById('csrf').submit();
</script>
if(!isset($_SESSION["confrimation"])) {
    $_SESSION["confrimation"] = rand(1,10); 
}
$randomNumber = $_SESSION["confrimation"];
<?php 

    session_start();
    //get a random number and store it in session variable
    if(!isset($_SESSION["confrimation"])) {
        $_SESSION["confrimation"] = rand(1,10); 
    }
    $randomNumber = $_SESSION["confrimation"];

    if (isset($_POST['submit'])) {

        $input = $_POST['input'];

        if( $input > $randomNumber )
        {       
            //code
        }
        else if($input < $randomNumber)
        {
            //code
        }

    }       
?>