<?php
include('../db_connect/db_connect.php');
$employee_id=$_POST['employee_id'];
$emp_name=$_POST['employee_name'];
$gender=$_POST['gender'];
$dob=$_POST['date_of_birth'];
$address=$_POST['address'];
$email=$_POST['email_id'];
$basic_salary=$_POST['basic_salary'];
$mob_num=$_POST['mob_number'];
$sql="update employee_details set employee_name='$emp_name',employee_gender='$gender',date_of_birth='$dob',employee_address='$address',e_mail='$email',basic_salary='$basic_salary',contact_no='$mob_num' where employee_id='$employee_id' ";
mysqli_query($conn,$sql);
?>

<script>
alert("employee details updated");
document.location="employee_detail_view.php";
</script>