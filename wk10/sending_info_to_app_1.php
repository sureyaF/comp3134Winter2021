<?php

$q= "";


if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["q"])) {
    $q= "";
  } else {
    $q =$_GET["q"];
}
}
?>
<form method="get">
<input name="q" placeholder="Enter Text">
<br/>
<input type="submit" value="Go">
</form>


<?php
echo isset($_GET['q']) ? "output: ".$_GET['q']."<br/></br>" :"";

?>
