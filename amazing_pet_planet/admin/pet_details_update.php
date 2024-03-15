<?php
include('../db_connect/db_connect.php');
$pet_details_id=$_POST['pet_details_id'];
$pet_category_id=$_POST['pet_category_id'];
$pet_name=$_POST['pet_name'];
$pet_description=$_POST['pet_description'];
$pet_gender=$_POST['pet_gender'];
$date_of_birth=$_POST['date_of_birth'];
$weight=$_POST['weight'];
$pet_photo=$_POST['pet_photo'];
$pet_price=$_POST['pet_price'];
$sql="update pet_details set pet_category_id='$pet_category_id',pet_name='$pet_name',pet_description='$pet_description',pet_gender='$pet_gender',date_of_birth='$date_of_birth',weight='$weight',pet_photo='$pet_photo',pet_price='$pet_price' where pet_details_id='$pet_details_id'";
mysqli_query($conn,$sql);
?>

<script>
alert("pet detail updated");
document.location="pet_details_view.php";
</script>