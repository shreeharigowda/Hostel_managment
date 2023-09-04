<?php
include('conn.php');
session_start();

$username = $_POST['student_username'];
$password = $_POST['student_password'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "select *from student_details where  full_name = '$username' and usn = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);





if ($count == 1) {
    $_SESSION['username'] = $username;
    header("Location: http://localhost/Hostel_Management_system/attendance.php");

    
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}

?>