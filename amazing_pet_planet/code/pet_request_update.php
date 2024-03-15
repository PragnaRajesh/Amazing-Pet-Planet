<?php
include('../db_connect/db_connect.php');
$pet_request_id=$_POST['pet_request_id'];
$user_id=$_POST['user_id'];
$pet_details_id=$_POST['pet_details_id'];
$reason=$_POST['reason'];
$request_date=$_POST['request_date'];
$status=$_POST['status'];
$sql="update pet_request set user_id='$user_id',pet_details_id='$pet_details_id',reason='$reason',request_date='$request_date',request_status='$status' where pet_request_id='$pet_request_id'";
mysqli_query($conn,$sql);
?>

<script>
alert("updated");
document.location="pet_request_view.php";
</script>