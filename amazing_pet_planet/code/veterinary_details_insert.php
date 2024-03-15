<?php
include('../db_connect/db_connect.php');
$veterinary_name=$_POST['veterinary_name'];
$veterinary_description=$_POST['veterinary_description'];
$sql="insert into veterinary_details values(null,'$veterinary_name','$veterinary_description')";
mysqli_query($conn,$sql);
?>

<script>
alert("vererinary details added");
document.location="veterinary_details_form.php";
</script>