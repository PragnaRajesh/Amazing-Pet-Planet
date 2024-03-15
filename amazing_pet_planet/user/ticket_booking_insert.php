<?php
include('../db_connect/db_connect.php');
$user_id=$_POST['user_id'];
$no_of_adults=$_POST['no_of_adults'];
$no_of_childrens=$_POST['no_of_childrens'];
$booking_date=$_POST['booking_date'];
$booking_time=$_POST['booking_time'];

$sql="insert into ticket_booking values(null,'$user_id','$no_of_adults','$no_of_childrens','$booking_date','$booking_time','Pending')";
mysqli_query($conn,$sql);
?>

<script>
alert("Successfull");
document.location="ticket_booking_view.php";
</script>