<?php
include('../db_connect/db_connect.php');
$ticket_booking_id=$_POST['ticket_booking_id'];
$paid_amount=$_POST['paid_amount'];
$paid_date=$_POST['paid_date'];
$sql="insert into user_payments values(null,'$ticket_booking_id','$paid_amount','$paid_date')";
mysqli_query($conn,$sql);
?>

<script>
alert("payment done");
document.location="user_payments_view.php";
</script>