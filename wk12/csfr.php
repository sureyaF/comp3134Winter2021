<?php
if(isset($_POST['submit'])) {
    $name = $_POST['username'];
    $password = $_POST['password'];
    echo " SUCCESSFUL <br> User Has submitted the form and entered this usernam>
    echo "<br>Users password has been submited and entered this:<b> $password <>
}
else {
        echo " ERROR! User login failed";
}
?>
