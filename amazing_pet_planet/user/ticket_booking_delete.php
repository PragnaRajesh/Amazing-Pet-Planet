<?php
include('../db_connect/db_connect.php');
$ticket_booking_id=$_REQUEST['ticket_booking_id'];
$sql="delete from ticket_booking where ticket_booking_id=$ticket_booking_id";
mysqli_query($conn,$sql);
?>

<script>
alert('Values are deleted');
document.location='ticket_booking_view.php';
</script>