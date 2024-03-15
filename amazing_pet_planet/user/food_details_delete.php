<?php
include('../db_connect/db_connect.php');
$food_id=$_REQUEST['food_id'];
$sql="delete from food_details where food_id=$food_id";
mysqli_query($conn,$sql);
?>

<script>
alert('Values are deleted');
document.location='food_details_view.php';
</script>