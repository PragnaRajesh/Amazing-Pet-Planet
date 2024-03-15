<?php
include('../db_connect/db_connect.php');
$rescue_animal_id=$_REQUEST['rescue_animal_id'];
$sql="update rescue_animal set rescue_status='Accepted' where rescue_animal_id=$rescue_animal_id";
mysqli_query($conn,$sql);
?>

<script>
alert('values are Accepted');
document.location='rescue_animal_view.php';
</script>
