<?php
$name = $_POST['payment_name'];
$payment_usn = $_POST['payment_usn'];
$payment_semester = $_POST['payment_semester'];
$payment_amount = $_POST['payment_amount'];
$payment_utr = $_POST['payment_utr'];


include 'conn.php';

if(isset($_POST['submit_payment']))
{
    $query = "INSERT INTO payment_verification (usn,name,semester,amount,utr_no)VALUES ('$payment_usn','$name','$payment_semester','$payment_amount','$payment_utr')";

}

$data = mysqli_query($con, $query);

if ($data) {
    // echo "Data inserted";
    header("Location: http://localhost/Hostel_Management_system/payment.php");

} else {
    echo "data not insrted";
}
?>