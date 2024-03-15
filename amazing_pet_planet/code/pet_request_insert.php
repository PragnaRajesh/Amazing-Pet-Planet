<?php
include('../db_connect/db_connect.php');
$user_id=$_POST['user_id'];
$pet_details_id=$_POST['pet_details_id'];
$reason=$_POST['reason'];
$request_date=$_POST['request_date'];
$status=$_POST['status'];
$sql="insert into pet_request values(null,'$user_id','$pet_details_id','$reason','$request_date','$status')";
mysqli_query($conn,$sql);
?>

<script>
alert("request sent");
document.location="pet_request_form.php";
</script>