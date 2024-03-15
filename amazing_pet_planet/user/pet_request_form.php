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
                        <h1 class="page-head-line">Pet Request Form</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        
                        <div class="panel-body">
						
						<?php include('val.php'); ?>
<form name="form1" id="formID" method="post" action="pet_request_insert.php">
  <table width="515" height="601" border="0" align="center">
    <tr>
      <td height="90" colspan="2"><div align="center"><span class="style1">Pet Request </span></div></td>
    </tr>
    <tr>
      <td width="205" height="70"><div align="center"><span class="style2">User name</span></div></td>
      <td width="294"><select name="user_id" id="user_id" class="form-control validate[required]">
	  
		<?php 
		include('../db_connect/db_connect.php');
		$uname=$_SESSION['uname'];
		$sql="select * from user_details where email_id='$uname'";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
		<option value="<?php echo $row['user_id'];?>" ><?php echo $row['user_first_name'];?></option>
		<?php
		}
		?>
        </select></td>
      </select></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Pet name </span></div></td>
      <td><select name="pet_details_id" id="pet_details_id" class="form-control validate[required]">
	  
		<?php 
		$pet_details_id=$_REQUEST['pet_details_id'];
		$sql="select * from pet_details where pet_details_id='$pet_details_id'";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
		<option value="<?php echo $row['pet_details_id'];?>" ><?php echo $row['pet_name'];?></option>
		<?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td height="90"><div align="center" class="style2">Reason</div></td>
      <td height="90"><textarea name="reason" id="reason" class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Request Date</span></div></td>
      <td height="70"><input name="request_date" value="<?php echo date('Y-m-d'); ?>" readonly="" type="date" id="request_date" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td height="70">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="70" colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="Request">
        <input type="reset" name="Reset" class="btn btn-danger" value="Cancel">
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