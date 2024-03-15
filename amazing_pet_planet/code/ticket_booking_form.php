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
                        <h1 class="page-head-line">Ticket Booking  Form</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        
                        <div class="panel-body">
						
						<?php include('val.php'); ?>
<form name="form1" id="formID" method="post" action="ticket_booking_insert.php">
  <table width="476" height="226" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">
        <p class="style1">Ticket Booking</p>
        </div></td>
    </tr>
    <tr>
      <td width="227" height="70"><div align="center"><span class="style2">User name </span></div></td>
      <td width="233" height="70"><select name="user_id" id="user_id" class="form-control validate[required]">
        <option value="" selected>select</option>
        <?php 
		include('../db_connect/db_connect.php');
		$sql="select * from user_details";
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
      <td height="70"><div align="center" class="style2">No of Adults </div></td>
      <td height="70"><input name="no_of_adults" type="text" id="no_of_adults" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">No of Childrens </span></div></td>
      <td height="70"><input name="no_of_childrens" type="text" id="no_of_childrens" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Booking Date </span></div></td>
      <td height="70"><input name="booking_date" type="date" id="booking_date" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Booking Time </span></div></td>
      <td height="70"><input name="booking_time" type="text" id="booking_time" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="90"><div align="center"><span class="style2">Status</span></div></td>
      <td height="70"><textarea name="status" id="status" class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td height="70" colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
        <input type="reset" name="Reset" class="btn btn-danger" value="Reset">
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