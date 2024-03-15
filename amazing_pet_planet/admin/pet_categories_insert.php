<?php
include('../db_connect/db_connect.php');
$pe_c_nam=$_POST['pet_category_name'];

$p_icon=$_POST['pet_icons'];

$pet_icons=$_FILES['pet_icons']['name'];
$tmp_location=$_FILES['pet_icons']['tmp_name'];
$target="../images/".$pet_icons;
move_uploaded_file($tmp_location,$target);

	
	
	//$sql="select * from pet_categories where pet_category_name='$pe_c_nam'";
	//$res=mysqli_query($conn,$sql);
	//if($row=mysqli_fetch_array($res))
	//{
?>
<script>
//alert("Already Category Added...");
//history.back();
</script>
<?php

//}
//else
//{

$sql="insert into pet_categories values(null,'$pe_c_nam','$p_icon')";
mysqli_query($conn,$sql);
?>
<script>
alert("selected");
document.location="pet_category_view.php";
</script>
<?php
//}
?>