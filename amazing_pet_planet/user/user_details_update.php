<?php
include('../db_connect/db_connect.php');
$user_id=$_POST['user_id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];

$sql="update user_details set user_first_name='$first_name',user_last_name='$last_name',user_address='$address',gender='$gender',email_id='$email_id',contact_no='$contact_no' where user_id='$user_id'";
mysqli_query($conn,$sql);
?>

<script>
alert("User details updated");
document.location="user_details_edit.php";
</script>