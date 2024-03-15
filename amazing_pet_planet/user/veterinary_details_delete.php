<?php
include('../db_connect/db_connect.php');
$veterinary_id=$_REQUEST['veterinary_id'];
$sql="delete from veterinary_details where veterinary_id=$veterinary_id";
mysqli_query($conn,$sql);
?>

<script>
alert('Values are deleted');
document.location='veterinary_details_view.php';
</script>