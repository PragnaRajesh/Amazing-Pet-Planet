<?php
include('../db_connect/db_connect.php');
$pe_c_nam=$_POST['pet_category_name'];

$p_icon=$_POST['pet_icons'];

$pet_icons=$_FILES['pet_icons']['name'];
$tmp_location=$_FILES['pet_icons']['tmp_name'];
$target="../images/".$pet_icons;
move_uploaded_file($tmp_location,$target);

$sql="insert into pet_categories values(null,'$pe_c_nam','$p_icon')";
mysqli_query($conn,$sql);
?>

<script>
alert("selected");
document.location="pet_categories_form.php";
</script>