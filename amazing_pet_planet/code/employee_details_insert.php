<?php
include('../db_connect/db_connect.php');
$emp_name=$_POST['employee_name'];
$gender=$_POST['gender'];
$dob=$_POST['date_of_birth'];
$address=$_POST['address'];
$email=$_POST['email_id'];
$basic_salary=$_POST['basic_salary'];
$mob_num=$_POST['mob_number'];
$sql="insert into employee_details values(null,'$emp_name','$gender','$dob','$address','$email','$basic_salary','$mob_num')";
mysqli_query($conn,$sql);
?>

<script>
alert("employee details added");
document.location="employee_details_form.php";
</script>