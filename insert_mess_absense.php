<?php
include "conn.php";
session_start();

$username = $_SESSION['username'];
if(isset($_POST['submit_mess_absense']))
{



if(isset($_POST['breakfast'],$_POST['lunch'],$_POST['dinner']))
{
    $query = "INSERT INTO mess_absense (date,name,breakfast,lunch,dinner) values (curdate(),'$username','1','1','1')";
}
else if(isset($_POST['breakfast'],$_POST['lunch']))
{
    $query = "INSERT INTO mess_absense (date,name,breakfast,lunch) values (curdate(),'$username','1','1')";

}
else if(isset($_POST['breakfast'],$_POST['dinner']))
{
    $query = "INSERT INTO mess_absense (date,name,breakfast,dinner) values (curdate(),'$username','1','1')";

}
else if(isset($_POST['lunch'],$_POST['dinner']))
{
    $query = "INSERT INTO mess_absense (date,name,lunch,dinner) values (curdate(),'$username','1','1')";

}
else if(isset($_POST['breakfast']))
{
    $query = "INSERT INTO mess_absense (date,name,breakfast) values (curdate(),'$username','1')";

}
else if(isset($_POST['lunch']))
{
    $query = "INSERT INTO mess_absense (date,name,lunch) values (curdate(),'$username','1')";

}
else if(isset($_POST['dinner']))
{
    $query = "INSERT INTO mess_absense (date,name,dinner) values (curdate(),'$username','1')";

}

}

$data = mysqli_query($con, $query);

if ($data) {
    header("Location: http://localhost/Hostel_Management_system/mess_absense.php");
} else {
    echo "TODAY'S ATTENDANCE ALREADY TAKEN PLEASE TRY AGAIN TOMORROW";
}

?>
