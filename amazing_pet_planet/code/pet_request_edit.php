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
<?php
include('../db_connect/db_connect.php');
$pet_request_id= $_REQUEST['pet_request_id'];
$sql="select * from pet_request where $pet_request_id=pet_request_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" id="formID" method="post" action="pet_request_update.php">
  <table width="515" height="601" border="0" align="center">
    <tr>
      <td height="90" colspan="2"><div align="center"><span class="style1">Pet Request </span></div></td>
	  <input type="hidden" name="pet_request_id" value="<?php echo $row['pet_request_id'];?>">
    </tr>
    <tr>
      <td width="205" height="70"><div align="center"><span class="style2">User Id </span></div></td>
      <td width="294"><select name="user_id" id="user_id" class="form-control validate[required]">
	   <option value="">select</option>
		<?php 
		$sql2="select * from user_details";
		$res2=mysqli_query($conn,$sql2);
		while($row2=mysqli_fetch_array($res2))
		{
		?>
		<option value="<?php echo $row2['user_id'];?>" <?php if($row2['user_id']==$row['user_id']){?>selected <?php }?>><?php echo $row2['user_first_name'];?></option>
		<?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Pet Id </span></div></td>
      <td><select name="pet_details_id" id="pet_details_id" class="form-control validate[required]">
	   <option value="">select</option>
		<?php 
		$sql3="select * from pet_details";
		$res3=mysqli_query($conn,$sql3);
		while($row3=mysqli_fetch_array($res3))
		{
		?>
		<option value="<?php echo $row3['pet_details_id'];?>" <?php if($row3['pet_details_id']==$row['pet_details_id']){?>selected <?php }?>><?php echo $row3['pet_name'];?></option>
		<?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td height="90"><div align="center" class="style2">Reason</div></td>
      <td height="90"><textarea name="reason" id="reason" class="form-control validate[required]"><?php echo $row['reason'];?></textarea></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Request Date</span></div></td>
      <td height="70"><input name="request_date" type="date" id="request_date" class="form-control validate[required,custom[date]]" value="<?php echo $row['request_date'];?>"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Status</span></div></td>
      <td><input name="status" type="text" id="status" class="form-control validate[required]" value="<?php echo $row['request_status'];?>"></td>
    </tr>
    <tr>
      <td height="70" colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="Request">
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