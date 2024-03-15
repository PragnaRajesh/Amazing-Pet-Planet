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

                    <div class="col-md-8">

                        <div class="table-responsive">
						<a href="ticket_booking_form.php"><img src="assets/img/file_add.png" width="33" height="25" border="0"/></a>
						<p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <th width="62"><div align="center">S No </div></th>
      <th width="200"><div align="center">User name </div></th>
      <th width="200"><div align="center">No Of Adults </div></th>
      <th width="200"><div align="center">No of Children</div></th>
      <th width="200"><div align="center">Booking Date</div></th>
      <th width="200"><div align="center">Booking Time </div></th>
      <th width="200"><div align="center">Booking Status </div></th>
      <th width="200"><div align="center">Edit</div></th>
      <th width="200"><div align="center">Delete</div></th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl=1;
	$sql="select * from ticket_booking tb,user_details ud where tb.user_id=ud.user_id";
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
      <td><a href="ticket_booking_edit.php?ticket_booking_id=<?php echo $row['ticket_booking_id'];?>">Edit</a></td>
      <td><a href="ticket_booking_delete.php?ticket_booking_id=<?php echo $row['ticket_booking_id'];?>">delete</a></td>
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
