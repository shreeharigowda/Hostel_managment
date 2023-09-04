<?php
include "conn.php";
session_start();
$type = $_POST['feedback_type'];
$details = $_POST['feedback_details'];

if(isset($_POST['feedback_submit']))
{
    $query = "INSERT INTO feedback (feedback_type,feedback_details) VALUES ('$type','$details')";

}


$data = mysqli_query($con, $query);

if ($data) {
    // echo "Data inserted";
    header("Location: http://localhost/Hostel_Management_system/feedback.php");
    


} else {
    echo "data not insrted";
}
?>