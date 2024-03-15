<?php
include('../db_connect/db_connect.php');
$pet_request_id=$_POST['pet_request_id'];
$paid_amount=$_POST['pet_price'];
$pet_details_id=$_POST['pet_details_id'];
$paid_date=date('Y-m-d');
$sql="insert into user_payments values(null,'$pet_request_id','$paid_amount','$paid_date')";
mysqli_query($conn,$sql);

$sql2="update  pet_details set pet_status='SOLD' where pet_details_id='$pet_details_id'";
mysqli_query($conn,$sql2);

$sql3="update  pet_request set request_status='PAID' where pet_request_id='$pet_request_id'";
mysqli_query($conn,$sql3);
?>

<script>
alert("Payment done");
document.location="pet_request_view.php";
</script>