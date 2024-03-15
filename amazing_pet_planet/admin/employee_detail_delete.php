<?php
include('../db_connect/db_connect.php');
$employee_id=$_REQUEST['employee_id'];
$sql="delete from employee_details where employee_id=$employee_id";
mysqli_query($conn,$sql);
?>

<script>
alert('values are deleted');
document.location='employee_detail_view.php';
</script>