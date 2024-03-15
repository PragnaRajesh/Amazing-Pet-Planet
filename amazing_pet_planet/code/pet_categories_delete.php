<?php
include('../db_connect/db_connect.php');
$pet_category_id=$_REQUEST['pet_category_id'];
$sql="delete from pet_categories where pet_category_id=$pet_category_id";
mysqli_query($conn,$sql);
?>

<script>
alert('values are deleted');
document.location='pet_category_view.php';
</script>