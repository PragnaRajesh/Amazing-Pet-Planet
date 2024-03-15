<?php
include('../db_connect/db_connect.php');
$food_id=$_POST['food_id'];
$f_name=$_POST['food_name'];
$f_type=$_POST['food_type'];
$f_description=$_POST['food_description'];
$sql="update food_details set food_name='$f_name',food_type='$f_type',food_description='$f_description' where food_id='$food_id'";
mysqli_query($conn,$sql);
?>

<script>
alert("food details updated");
document.location="food_details_view.php";
</script>