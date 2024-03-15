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
                        <h1 class="page-head-line">User Payments  Form</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        
                        <div class="panel-body">
						
						<?php include('val.php'); ?>
<form name="form1" id="formID" method="post" action="user_payment_insert.php">
  <table width="420" height="384" border="0" align="center">
    <tr>
      <td height="90" colspan="2"><div align="center"><span class="style1"><span class="style1">User Payment </span></span></div></td>
    </tr>
    <tr>
      <td width="186" height="70"><div align="center"><span class="style2">Ticket Booking date </span></div></td>
      <td width="206" height="70"><select name="ticket_booking_id" class="form-control validate[required]" id="ticket_booking_id">
        <option value="" selected>select</option>
        <?php 
		include('../db_connect/db_connect.php');
		$sql="select * from ticket_booking";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
        <option value="<?php echo $row['ticket_booking_id'];?>"><?php echo $row['booking_date'];?></option>
        <?php
		}
		?>
      </select></td>
      <td width="0"></select><td width="8"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Paid Amount </span></div></td>
      <td height="70"><input name="paid_amount" type="text" id="paid_amount" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Paid Date </span></div></td>
      <td height="70"><input name="paid_date" type="date" id="paid_date" class="form-control validate[required,custom[date]]"></td>
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