<?php
include('../db_connect/db_connect.php');
$user_payment_id=$_REQUEST['user_payment_id'];
$sql="delete from user_payments where user_payment_id=$user_payment_id";
mysqli_query($conn,$sql);
?>

<script>
alert('Values are deleted');
document.location='user_payments_view.php';
</script>
