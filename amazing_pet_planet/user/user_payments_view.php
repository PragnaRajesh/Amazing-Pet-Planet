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
	$uname=$_SESSION['uname'];
	$sql="select * from user_payments up,pet_request pr,pet_details pd,user_details ud where up.pet_request_id=pr.pet_request_id and pr.pet_details_id=pd.pet_details_id and pr.user_id=ud.user_id and ud.email_id='$uname'";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
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
