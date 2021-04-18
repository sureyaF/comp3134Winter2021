<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SQL Injection form error example</title>
    <meta name="description" content="Twitter Bootstrap Version2.0 form error example from w3resource.com.">
    <link href="http://localhost/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">
</head>

<body style="margin-top: 50px">
    <div class="container">
        <div class="row">
            <div class="span6">

                <?php $host="localhost";

 $username="root";$password="";$db_name="hr";$con=mySQL_connect("$host","$username","$password") or die("cannot connect");
                mySQL_select_db("$db_name") or die("cannot select DB");
                $uid = $_POST['uid'];
                $pid = $_POST['passid'];
                $SQL = "select * from user_details where userid = '$uid' and password = '$pid' ";
                $result = mySQL_query($SQL);
                if (mySQL_num_rows($result) > 0) {
                    echo "<h4>" .
                        "-- Personal Information -- " . $row[3] . "</h4>", "</br>";
                    while ($row = mySQL_fetch_row($result)) {
                        echo "<p>" . "User ID : " . $row[0] . "</p>";
                        echo "<p>" . "Password : " . $row[1] . "</p>";
                        echo "<p>" .
                            "First Name : " .
                            $row[2] . " Last Name : " .
                            $row[3] . "</p>";
                        echo "<p>" .
                            "Gender : " .
                            $row[4] . " Date of Birth :" .
                            $row[5] . "</p>";
                        echo "<p>" .
                            "Country : " .
                            $row[6] . " User rating : " . $row[7] .
                            "</p>";
                        echo "<p>" . "Email ID : " .
                            $row[8] .
                            "</p>";
                        echo "--------------------------------------------";}}else echo "Invalid user id or password";
?>
</div>
</div>
</div>
</body>
</html>