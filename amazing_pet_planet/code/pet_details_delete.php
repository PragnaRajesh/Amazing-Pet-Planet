<?php
include('../db_connect/db_connect.php');
$pet_details_id=$_REQUEST['pet_details_id'];
$sql="delete from pet_details where pet_details_id=$pet_details_id";
mysqli_query($conn,$sql);
?>

<script>
alert('values are deleted');
document.location='pet_details_view.php';
</script>