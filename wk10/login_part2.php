<?php

$top_ten_password = array(
"122345",
"123456789",
"course",
"learning",
"abc123",
"password1",
"12345",
"1234567",
"111111");
$input_pass = $_POST['password'];
$submit = $_POST['submit'];

if(isset($_POST['submit']) && isset($_POST['password'])){
         if(in_array($input_pass, $top_ten_password)){
                echo"<h2> Password  failure </h2>";
        }
        else{
            echo"<h2> Successfully authenticated </h2>";
        }
}
?>
<h1>Weak Password</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <label>Password</label>
 <input type="password" name="password">
 <br/>
 <input type="submit">
</form>


