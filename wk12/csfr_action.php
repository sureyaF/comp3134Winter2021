<?php
if(isset($_POST['submit'])) {
    $name = $_POST['username'];
    $password = $_POST['password'];
    echo " SUCCESSFUL <br> User Has submitted the form and entered this username : <b> $name </b>";
    echo "<br>Users password has been submited and entered this:<b> $password </b> .";
}
else {
        echo " ERROR! User login failed";
}
?>
