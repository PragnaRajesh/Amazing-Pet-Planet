<?php
include('../db_connect/db_connect.php');
$pet_category_id=$_POST['pet_category_id'];
$pe_c_nam=$_POST['pet_category_name'];
$p_icon=$_POST['pet_icons'];
$sql="update pet_categories set pet_category_name='$pe_c_nam',pet_icons='$p_icon' where pet_category_id='$pet_category_id'";
mysqli_query($conn,$sql);
?>

<script>
alert("updated");
document.location="pet_category_view.php";
</script>