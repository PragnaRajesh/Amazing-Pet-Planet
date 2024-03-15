<?php
include('../db_connect/db_connect.php');
$f_name=$_POST['food_name'];
$f_type=$_POST['food_type'];
$f_description=$_POST['food_description'];
$sql="insert into food_details values(null,'$f_name','$f_type','$f_description')";
mysqli_query($conn,$sql);
?>

<script>
alert("Food details added");
document.location="food_details_form.php";
</script>