<?php include('header.php');  ?>


<body>
    <div id="wrapper">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<?php include('top_nav.php');  ?>
        <!-- /. NAV TOP  -->
		
	<?php include('side_nav.php');  ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                  <div class="col-md-12">
                      <h1 class="page-head-line">User Payments </h1>

                  </div>
                </div>
                <div class="row">

                    <div class="col-md-12">

                        <div class="table-responsive">
						<p>&nbsp;</p>
						<?php include('cal.php');?>
							  <form name="form1" method="post" action="user_payments_view.php">
			    <table width="968" border="0">
  <tr>
    <td width="139">From Date: </td>
    <td width="255"><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date1", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    <td width="161">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Date :
&nbsp;&nbsp;&nbsp;</td>
    <td width="350"><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date2", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    <td width="249"><input type="submit" name="Submit" class="btn btn-primary" value="SEARCH"></td>
  </tr>
</table>		  
			  </form>
			   <?php 
			  $date1=$_POST['date1'];
			  $date2=$_POST['date2'];
			   ?>
			  <h5>From Date : <font color="#003399"><?php echo $date1; ?> </font>&nbsp;&nbsp; To Date: <font color="#003399"><?php echo $date2?></font></h5>
             
  
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <th width="69"><div align="left"><strong>S No </strong></div></th>
      <th width="200"><div align="left"><strong>User Name </strong></div></th>
      <th width="200"><div align="left"><strong>Pet Name </strong></div></th>
      <th width="200"><div align="left"><strong>Paid Amount</strong></div></th>
      <th width="200"><div align="left"><strong>Paid Date </strong></div></th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$s1=1;
	$tot=0;
	$sql="select * from user_payments up,pet_request pr,pet_details pd,user_details ud where up.pet_request_id=pr.pet_request_id and pr.pet_details_id=pd.pet_details_id and pr.user_id=ud.user_id and up.paid_date  between '$date1' and '$date2'";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	$tot=$tot+$row['paid_amount'];
	?>
    <tr>
      <td height="49">&nbsp;<?php echo $s1++;?></td>
      <td>&nbsp;<?php echo $row['user_first_name'];?></td>
	  <td>&nbsp;<?php echo $row['pet_name'];?></td>
      <td>&nbsp;<?php echo $row['paid_amount'];?></td>
      <td>&nbsp;<?php echo $row['paid_date'];?></td>
    </tr>
	<?php
	}
	?>
                              </tbody>
                            </table>
							 <strong>Total : </strong>
      <strong><?php echo $tot; ?></strong>
                      </div>




                    </div>
                </div>
                <!--/.Row-->


                <!--/.ROW-->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
 <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>
<?php include('footer.php');  ?>

  </table>
</form>
</body>
</html>
