<?php
include('../db_connect/db_connect.php');
$pet_request_id=$_REQUEST['pet_request_id'];
$sql="update pet_request set request_status='Reject' where pet_request_id=$pet_request_id";
mysqli_query($conn,$sql);
?>

<script>
alert('Request Rejected');
document.location='pet_request_view.php';
</script>