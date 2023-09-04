<?php
include('conn.php');
$admin_username = $_POST['admin_username'];
$admin_password = $_POST['admin_password'];

//to prevent from mysqli injection  
$admin_username = stripcslashes($admin_username);
$admin_password = stripcslashes($admin_password);
$admin_username = mysqli_real_escape_string($con, $admin_username);
$admin_password = mysqli_real_escape_string($con, $admin_password);

$sql = "select *from admin_login where admin_username = '$admin_username' and admin_password = '$admin_password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
   
    header("Location: http://localhost/Hostel_Management_system/room_allocation.php");
    exit();


} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}

?>