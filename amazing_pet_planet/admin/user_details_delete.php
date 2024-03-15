<?php
include('../db_connect/db_connect.php');
$user_id=$_REQUEST['user_id'];
$sql="delete from user_details where user_id=$user_id";
mysqli_query($conn,$sql);
?>

<script>
alert('values are deleted');
document.location='user_details_view.php';
</script>