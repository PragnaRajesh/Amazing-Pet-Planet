<?php
session_start();
 $a=$_POST['new_password'];
   	$b=$_POST['confirm_password'];
	
		include('../db_connect/db_connect.php');
 $sql = "select * from login where user_name ='".$_SESSION['uname']."' and password='".$_POST['old_password']."'";
		 $res=mysqli_query($conn,$sql);
	if($a==$b)
	{
		if(mysqli_num_rows($res)>0)
		{
			 $sql1 = "update login set password = '".$_POST['new_password']."' where user_name  ='".$_SESSION['uname']."'";
			$res1 = mysqli_query($conn,$sql1);
			?>
				<script>
				alert('Successfully updated your password');
			document.location="Change_Password.php";
				</script>
			<?php
		} else
		{
			?>
				<script>
					alert('Failed to update your password');
					document.location="Change_Password.php";
				</script>
			<?php
		}
	}else
		{
			?>
				<script>
					alert('New Password and Retype Password do not match');
					document.location="Change_Password.php";
				</script>
			<?php
		}
		
?>
