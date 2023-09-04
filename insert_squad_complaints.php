<?php
$student_name = $_POST['student_name'];
$student_usn = $_POST['student_usn'];
$complaint_type = $_POST['complaint_type'];
$complaint_details = $_POST['complaint_details'];

include 'conn.php';
if(isset($_POST['complaint_submit']))
{
    $query = "INSERT INTO squad_complaints (student_name,student_usn,complaint_type,complaint_details) VALUES ('$student_name','$student_usn','$complaint_type','$complaint_details')";

}

$data = mysqli_query($con, $query);

if ($data) {
    // echo "Data inserted";
    header("Location: http://localhost/Hostel_Management_system/room_allocation.php");

} else {
    echo "data not insrted";
}
?>