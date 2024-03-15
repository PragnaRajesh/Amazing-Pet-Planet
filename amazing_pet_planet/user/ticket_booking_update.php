<?php
include('../db_connect/db_connect.php');
$ticket_booking_id=$_POST['ticket_booking_id'];
$user_id=$_POST['user_id'];
$no_of_adults=$_POST['no_of_adults'];
$no_of_childrens=$_POST['no_of_childrens'];
$booking_date=$_POST['booking_date'];
$booking_time=$_POST['booking_time'];
$status=$_POST['status'];
$sql="update ticket_booking set user_id='$user_id',no_of_adults='$no_of_adults',no_of_children='$no_of_childrens',booking_date='$booking_date',booking_time='$booking_time',ticket_booking_status='$status' where ticket_booking_id='$ticket_booking_id'";
mysqli_query($conn,$sql);
?>

<script>
alert("Updated");
document.location="ticket_booking_view.php";
</script>