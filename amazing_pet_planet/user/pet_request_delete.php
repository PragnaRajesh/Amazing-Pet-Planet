<?php
include('../db_connect/db_connect.php');
$pet_request_id=$_REQUEST['pet_request_id'];
$sql="delete from pet_request where pet_request_id=$pet_request_id";
mysqli_query($conn,$sql);
?>

<script>
alert('values are deleted');
document.location='pet_request_view.php';
</script>