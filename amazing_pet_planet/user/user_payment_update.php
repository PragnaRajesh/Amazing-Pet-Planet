<?php
include('../db_connect/db_connect.php');

$user_payment_id=$_POST['user_payment_id'];
$ticket_booking_id=$_POST['ticket_booking_id'];
$paid_amount=$_POST['paid_amount'];
$paid_date=$_POST['paid_date'];
$sql="update user_payments set ticket_booking_id='$ticket_booking_id',paid_amount='$paid_amount',paid_date='$paid_date' where user_payment_id='$user_payment_id'";
mysqli_query($conn,$sql);
?>

<script>
alert("Payment updated");
document.location="user_payments_view.php";
</script>