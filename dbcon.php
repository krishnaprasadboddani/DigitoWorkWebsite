<?php
$servername = "localhost";
$username = "root";
$password = "n2kPsUd7cWxy";
$dbname = "digitoworkweb";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
echo "";
?>
