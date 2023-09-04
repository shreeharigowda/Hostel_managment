<?php
$full_name = $_POST['full_name'];
$usn = $_POST['usn'];
$room_number = $_POST['room_number'];


include 'conn.php';



if(isset($_POST['submit_room']))
{
    if(isset($_POST['full_name'])){

        $query = "INSERT INTO student_details ( full_name,usn,room_number) VALUES ('$full_name','$usn','$room_number')";
    }
    
}

$data = mysqli_query($con, $query);

if ($data ) {
    // echo "Data inserted";
    header("Location: http://localhost/Hostel_Management_system/room_allocation.php");

} else {
    echo "data not insrted";
}
?>