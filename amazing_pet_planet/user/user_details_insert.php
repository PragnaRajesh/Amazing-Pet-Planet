<?php
include('../db_connect/db_connect.php');
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$sql="insert into user_details values(null,'$first_name','$last_name','$address','$gender','$email_id','$contact_no')";
mysqli_query($conn,$sql);
?>

<script>
alert("User details added");
document.location="user_details_form.php";
</script>