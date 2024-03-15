<?php
include('db_connect/db_connect.php');
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$email_id=$_POST['email_id'];
$contact_no=$_POST['contact_no'];
$password=$_POST['password'];
//$password=md5($_POST['password']);



	$sql="select * from user_details where email_id='$email_id'";
	$res=mysqli_query($conn,$sql);
	if($row=mysqli_fetch_array($res))
	{
?>

<script>
alert("Email Already Exists");
history.back();
</script>
<?php

	}
	else
	{
$sql="insert into user_details values(null,'$first_name','$last_name','$address','$gender','$email_id','$contact_no')";
mysqli_query($conn,$sql);

$sql2="insert into login values(null,'$email_id','$password','user','Enter Your Email Id','$email_id','Active')";
mysqli_query($conn,$sql2);
?>

<script>
alert("user registerd details added");
document.location="login.php";
</script>
<?php
}
?>