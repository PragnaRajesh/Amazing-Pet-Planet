<?php
include('../db_connect/db_connect.php');
$rescue_animal_id=$_REQUEST['rescue_animal_id'];
$sql="update rescue_animal set rescue_status='Rejected' where rescue_animal_id=$rescue_animal_id";
mysqli_query($conn,$sql);
?>

<script>
alert('Rejected....');
document.location='rescue_animal_view.php';
</script>
