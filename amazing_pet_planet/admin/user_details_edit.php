<?php include('header.php');  ?>

<body>
    <div id="wrapper">
	
	<?php include('top_nav.php');  ?>
        <!-- /. NAV TOP  -->
		<?php include('cal.php');  ?>
	<?php include('side_nav.php');  ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">User Details Form</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        
                        <div class="panel-body">
						
						<?php include('val.php'); ?>
						
<?php
include('../db_connect/db_connect.php');
$user_id= $_REQUEST['user_id'];
$sql="select * from user_details where $user_id=user_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
  <table width="465" height="359" border="0" align="center">
    <tr>
      <td height="90" colspan="2"><div align="center"><span class="style1">User Details </span></div></td>
    </tr>
    <tr>
      <td width="233" height="70"><div align="center" class="style2">First Name</div></td>
      <td width="216"><input name="first_name" type="text" id="first_name" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['user_first_name'];?>"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Last Name </span></div></td>
      <td height="70"><input name="last_name" type="text" id="last_name" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['user_last_name'];?>"></td>
    </tr>
    <tr>
      <td height="90"><div align="center"><span class="style2">Address</span></div></td>
      <td height="70"><textarea name="address" id="address" class="form-control validate[required]"><?php echo $row['user_address'];?></textarea></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Gender</span></div></td>
      <td height="70"><input name="gender" type="radio" value="male" class="validate[required]" checked>
        Male 
        <input name="gender" type="radio" value="female" class="validate[required]">
        Female</td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Email Id </span></div></td>
      <td height="70"><input name="email_id" type="email" id="email_id" class="form-control validate[required,custom[email]]" value="<?php echo $row['email_id'];?>"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Contact number </span></div></td>
      <td height="70"><input name="contact_no" type="text" id="contact_no" class="form-control validate[required,custom[mobile]]" value="<?php echo $row['contact_no'];?>"></td>
    </tr>
    <tr>
      <td height="70" colspan="2"><div align="center">
</div></td>
    </tr>
  </table>
</div>
                        </div>
                            </div>


        </div>
                <!--/.ROW-->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
	
<?php include('footer.php');  ?>
