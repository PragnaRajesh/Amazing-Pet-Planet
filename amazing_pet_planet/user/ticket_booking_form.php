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
      <td width="233" height="70">
	  <select name="user_id" id="user_id" class="form-control validate[required]">
      
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
      </td>
    </tr>
    <tr>
      <td height="70"><div align="center" class="style2">No of Adults </div></td>
      <td height="70"><input name="no_of_adults" type="text" id="no_of_adults" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">No of Childrens </span></div></td>
      <td height="70"><input name="no_of_childrens" type="text" id="no_of_childrens" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr><td height="70"><div align="center"><span class="style2">Booking date </span></div></td>
       <td height="50"><input name="booking date" type="date" id="booking_date" class="form-control validate[required,custom[date]]"></td>
      <td height="50"><?php				
	  include('cal.php');	
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("booking_date", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$date_default","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Booking Time </span></div></td>
      <td height="50"><input name="booking_time" type="time" id="booking_time" class="form-control validate[required]"></td>
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