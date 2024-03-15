
<?php session_start();?>
<?php


$username=$_POST['username'];
$password=$_POST['password'];
//$password=md5($_POST['password']);

include('db_connect/db_connect.php');
$sql="select * from login where user_name='$username' and password='$password'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
$type=$row['type'];
$_SESSION['uname']=$username;

if($type=="admin")
{
header('location:admin/home.php');
}
else if($type=="user")
{
header('location:user/home.php');
}

}
else
{
?>
<script>
alert("Invalid Username Or Password");
history.back();
</script>
<?php
}

?>

