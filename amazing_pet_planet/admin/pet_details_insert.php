<?php
include('../db_connect/db_connect.php');
$pet_category_id=$_POST['pet_category_id'];
$pet_name=$_POST['pet_name'];
$pet_description=$_POST['pet_description'];
$pet_gender=$_POST['pet_gender'];
$date_of_birth=$_POST['date_of_birth'];
$weight=$_POST['weight'];

$pet_photo=$_FILES['pet_photo']['name'];
$tmp_location=$_FILES['pet_photo']['tmp_name'];
$target="../images/".$pet_photo;
move_uploaded_file($tmp_location,$target);

$pet_price=$_POST['pet_price'];
$sql="insert into pet_details values(null,'$pet_category_id','$pet_name','$pet_description','$pet_gender','$date_of_birth','$weight','$pet_photo','$pet_price','Active')";
mysqli_query($conn,$sql);
?>

<script>
alert("pet detail added");
document.location="pet_details_view.php";
</script>