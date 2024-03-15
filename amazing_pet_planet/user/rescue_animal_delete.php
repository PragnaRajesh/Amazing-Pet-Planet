<?php
include('../db_connect/db_connect.php');
$rescue_animal_id=$_REQUEST['rescue_animal_id'];
$sql="delete from rescue_animal where rescue_animal_id=$rescue_animal_id";
mysqli_query($conn,$sql);
?>

<script>
alert('Values are deleted');
document.location='rescue_animal_view.php';
</script>
