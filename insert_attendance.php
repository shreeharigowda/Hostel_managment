<?php
include "conn.php";
session_start();
$shaan_attend = $_POST['shaan_attend'];
$hari_attend = $_POST['hari_attend'];
$rahul_attend = $_POST['rahul_attend'];
$praveen_attend = $_POST['praveen_attend'];
$riteesh_attend = $_POST['riteesh_attend'];
$pruthwik_attend = $_POST['pruthwik_attend'];
$aditya_attend = $_POST['aditya_attend'];
$gagan_attend = $_POST['gagan_attend'];
$pratyush_attend = $_POST['pratyush_attend'];
$vishal_attend = $_POST['vishal_attend'];
$submit_attendance_button = $_POST['submit_attendance'];



if(isset($_POST['submit_attendance']))
{
    $query = "INSERT INTO attendance (date,Shaan,Hari,Rahul,Praveen,Riteesh,Pruthwik,Aditya,Gagandeep,Pratyush,Vishal) VALUES (curdate(),'$shaan_attend','$hari_attend','$rahul_attend','$praveen_attend','$riteesh_attend','$pruthwik_attend','$aditya_attend','$gagan_attend','$pratyush_attend','$vishal_attend')";

}



$data = mysqli_query($con, $query);

if ($data) {

   
    // echo "Data inserted";
    header("Location: http://localhost/Hostel_Management_system/update_attendance.php");
    

} else {
    echo "TODAY'S ATTENDANCE ALREADY TAKEN PLEASE TRY AGAIN TOMORROW";
}
?>