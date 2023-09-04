<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel_management";

$con = mysqli_connect($servername, $username, $password, $dbname);

if ($con) {
    // echo "Connection established";
} else {
    die("Conncection not establised" . mysqli_connect_error());
}
?>