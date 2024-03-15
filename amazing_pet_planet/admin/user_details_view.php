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
                        <h1 class="page-head-line">User Details</h1>

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">

                    <div class="col-md-12">

                        <div class="table-responsive">
                          <p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <th width="51"><div align="left"><strong>S No </strong></div></th>
      <th width="200"><div align="left"><strong>First Name </strong></div></th>
      <th width="200"><div align="left"><strong>Last Name </strong></div></th>
      <th width="200"><div align="left"><strong>Address</strong></div></th>
      <th width="200"><div align="left"><strong>Gender</strong></div></th>
      <th width="200"><div align="left"><strong>Email</strong></div></th>
      <th width="200"><div align="left"><strong>Contact No </strong></div></th>
      <th width="200"><div align="left"><strong>Delete</strong></div></th>
      
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl=1;
	$sql="select * from user_details";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td height="52">&nbsp;<?php echo $sl++;?></td>
      <td>&nbsp;<?php echo $row['user_first_name'];?></td>
      <td>&nbsp;<?php echo $row['user_last_name'];?></td>
      <td>&nbsp;<?php echo $row['user_address'];?></td>
      <td>&nbsp;<?php echo $row['gender'];?></td>
      <td>&nbsp;<?php echo $row['email_id'];?></td>
      <td>&nbsp;<?php echo $row['contact_no'];?></td>
      
      <td><a href="user_details_delete.php?user_id=<?php echo $row['user_id'];?>"onClick="return confirm('Are u sure want to delete')" class="btn btn-danger">Delete</a></td>
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
