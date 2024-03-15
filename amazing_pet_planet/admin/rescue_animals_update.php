<?php
include('../db_connect/db_connect.php');
$rescue_animal_id=$_POST['rescue_animal_id'];
$pet_name=$_POST['pet_name'];
$pet_description=$_POST['pet_description'];
$rescue_description=$_POST['rescue_description'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$photo=$_POST['photo'];
$rescue_status=$_POST['rescue_status'];
$sql="update rescue_animal set pet_name='$pet_name',pet_description='$pet_description',rescue_description='$rescue_description',gender='$gender',age='$age',photo='$photo',rescue_status='$rescue_status' where rescue_animal_id='$rescue_animal_id'";
mysqli_query($conn,$sql);
?>

<script>
alert("updated");
document.location="rescue_animal_view.php";
</script>