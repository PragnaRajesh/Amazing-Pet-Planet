<?php
include('../db_connect/db_connect.php');
$user_id=$_POST['user_id'];
$pet_name=$_POST['pet_name'];
$pet_description=$_POST['pet_description'];
$rescue_description=$_POST['rescue_description'];
$gender=$_POST['gender'];
$age=$_POST['age'];

$photo=$_FILES['photo']['name'];
$tmp_location=$_FILES['photo']['tmp_name'];
$target="../images/".$photo;
move_uploaded_file($tmp_location,$target);


$sql="insert into rescue_animal values(null,'$user_id','$pet_name','$pet_description','$rescue_description','$gender','$age','$photo','Pending')";
mysqli_query($conn,$sql);
?>

<script>
alert("Request sent, Please wait for Admin's Response");
document.location="rescue_animal_view.php";
</script>