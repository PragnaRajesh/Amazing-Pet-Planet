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

                    <div class="col-md-8">

                        <div class="table-responsive">
						<a href="user_payment_form.php"><img src="assets/img/file_add.png" width="33" height="25" border="0"/></a>
						<p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <th width="69"><div align="center">S No </div></th>
      <th width="200"><div align="center">Ticket Booking date </div></th>
      <th width="200"><div align="center">Paid Amount</div></th>
      <th width="200"><div align="center">Paid Date </div></th>
      <th width="200"><div align="center">Edit</div></th>
      <th width="200"><div align="center">Delete</div></th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$s1=1;
	$sql="select * from user_payments up,ticket_booking tb where up.ticket_booking_id=tb.ticket_booking_id";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td height="49">&nbsp;<?php echo $s1++;?></td>
      <td>&nbsp;<?php echo $row['booking_date'];?></td>
      <td>&nbsp;<?php echo $row['paid_amount'];?></td>
      <td>&nbsp;<?php echo $row['paid_date'];?></td>
      <td><a href="user_payments_edit.php?user_payment_id=<?php echo $row['user_payment_id'];?>">Edit</a></td>
      <td><a href="user_payments_delete.php?user_payment_id=<?php echo $row['user_payment_id'];?>">delete</a></td>
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
