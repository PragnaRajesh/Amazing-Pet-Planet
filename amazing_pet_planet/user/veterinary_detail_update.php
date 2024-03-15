<?php
include('../db_connect/db_connect.php');
$veterinary_id=$_POST['veterinary_id'];
$veterinary_name=$_POST['veterinary_name'];
$veterinary_description=$_POST['veterinary_description'];
$sql="update veterinary_details set veterinary_name='$veterinary_name',veterinary_description='$veterinary_description' where veterinary_id='$veterinary_id'";
mysqli_query($conn,$sql);
?>

<script>
alert("Veterinary detail updated");
document.location="veterinary_details_view.php";
</script>