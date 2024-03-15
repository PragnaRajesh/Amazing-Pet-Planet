<?php
include('../db_connect/db_connect.php');
$pet_name=$_POST['pet_name'];
$pet_description=$_POST['pet_description'];
$rescue_description=$_POST['rescue_description'];
$gender=$_POST['gender'];
$age=$_POST['age'];

$photo=$_POST['photo'];
$photo=$_FILES['photo']['name'];
$tmp_location=$_FILES['photo']['tmp_name'];
$target="../images/".$photo;
move_uploaded_file($tmp_location,$target);
$rescue_status=$_POST['rescue_status'];
$sql="insert into rescue_animal values(null,'$pet_name','$pet_description','$rescue_description','$gender','$age','$photo','$rescue_status')";
mysqli_query($conn,$sql);
?>

<script>
alert("request sent");
document.location="rescue_animal_view.php";
</script>