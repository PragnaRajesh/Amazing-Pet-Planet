<?php
include('../db_connect/db_connect.php');
$ticket_booking_id=$_REQUEST['ticket_booking_id'];
$sql="update ticket_booking set ticket_booking_status='Not Confirmed' where ticket_booking_id=$ticket_booking_id";
mysqli_query($conn,$sql);
?>

<script>
alert('Ticket Booking Not Confirmed');
document.location='ticket_booking_view.php';
</script>