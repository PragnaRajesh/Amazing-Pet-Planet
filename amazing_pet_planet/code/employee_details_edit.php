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
                        <h1 class="page-head-line">Employee Details Form</h1>
                        

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
$employee_id= $_REQUEST['employee_id'];
$sql="select * from employee_details where $employee_id = employee_id ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" id="formID" method="post" action="employee_details_update.php">
  <table width="523" height="653" border="0" align="center">
    <tr>
      <td height="90" colspan="2"><div align="center"><span class="style1">Employee Details </span></div></td>
	  <input type="hidden" name="employee_id" value="<?php echo $row['employee_id'];?>">
    </tr>
    <tr>
      <td width="228" height="70"><div align="center">
        <p class="style2">Employee Name</p>
        </div></td>
      <td width="285" height="70"><input name="employee_name" type="text" id="employee_name" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['employee_name'];?>"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Gender</span></div></td>
      <td height="70"><input name="gender" type="radio" value="male" class="validate[required]" checked>
        Male 
        <input name="gender" type="radio" value="female" class="validate[required]">
        Female</td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Date Of Birth </span></div></td>
      <td><input name="date_of_birth" type="date" id="date_of_birth" class="form-control validate[required,custom[date]]" value="<?php echo $row['date_of_birth'];?>"></td>
    </tr>
    <tr>
      <td height="90"><div align="center"><span class="style2">Address</span></div></td>
      <td height="90"><textarea name="address" id="address" class="form-control validate[required]"><?php echo $row['employee_address'];?></textarea></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Email Id </span></div></td>
      <td><input name="email_id" type="email" id="email_id" class="form-control validate[required,custom[email]]" value="<?php echo $row['e_mail'];?>"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Basic Salary </span></div></td>
      <td><input name="basic_salary" type="text" id="basic_salary" class="form-control validate[required]" value="<?php echo $row['basic_salary'];?> "></td>
    </tr>
    <tr>
      <td height="70"><div align="center" class="style2">Mob Number</div></td>
      <td><input name="mob_number" type="text" id="mob_number" class="form-control validate[required,custom[mobile]]" value="<?php echo $row['contact_no'];?> "></td>
    </tr>
    <tr>
      <td height="60" colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
      </div></td>
    </tr>
  </table>
</form>
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