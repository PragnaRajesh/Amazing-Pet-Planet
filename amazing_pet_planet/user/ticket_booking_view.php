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
                      <h1 class="page-head-line">Ticket Booking </h1>

                  </div>
                </div>
                <div class="row">

                    <div class="col-md-12">

                        <div class="table-responsive">
						<a href="ticket_booking_form.php"><img src="assets/img/file_add.png" width="33" height="25" border="0"/> Add New Booking Here</a>
						<p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <th width="62"><div align="left"><strong>S No </strong></div></th>
      <th width="200"><div align="left"><strong>User name </strong></div></th>
      <th width="200"><div align="left"><strong>No Of Adults </strong></div></th>
      <th width="200"><div align="left"><strong>No of Children</strong></div></th>
      <th width="200"><div align="left"><strong>Booking Date</strong></div></th>
      <th width="200"><div align="left"><strong>Booking Time </strong></div></th>
      <th width="200"><div align="left"><strong>Booking Status </strong></div></th>

      <th width="200"><div align="left"><strong>Cancle</strong></div></th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl=1;
	$uname=$_SESSION['uname'];
	$sql="select * from ticket_booking tb,user_details ud where tb.user_id=ud.user_id and ud.email_id='$uname'";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>

    <tr>
      <td>&nbsp;<?php echo $sl++;?></td>
      <td>&nbsp;<?php echo $row['user_first_name'];?></td>
      <td>&nbsp;<?php echo $row['no_of_adults'];?></td>
      <td>&nbsp;<?php echo $row['no_of_children'];?></td>
      <td>&nbsp;<?php echo $row['booking_date'];?></td>
      <td>&nbsp;<?php echo $row['booking_time'];?></td>
      <td>&nbsp;<?php echo $row['ticket_booking_status'];?></td>
      <td><a href="ticket_booking_delete.php?ticket_booking_id=<?php echo $row['ticket_booking_id'];?>"onClick="return confirm('Are u sure want to cancel')" class="btn btn-danger">Cancel</a></td>
   </tr>
	<?php
	}
	?>
                              </tbody>
                            </table>
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
