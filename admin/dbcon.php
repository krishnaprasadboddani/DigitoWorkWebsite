<?php
$servername = "localhost";
$username = "digitoworkweb";
$password = "SJWuRb0!j2;H";
$dbname = "digitoworkweb";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>