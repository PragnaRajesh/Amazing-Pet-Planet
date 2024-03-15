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
                      <h1 class="page-head-line">Pet Request </h1>

                    </div>
                </div>
                <div class="row">

                    <div class="col-md-8">

                        <div class="table-responsive">
						<a href="pet_request_form.php"><img src="assets/img/file_add.png" width="33" height="25" border="0"/></a>
						<p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <th width="66"><div align="center" class="style1">S No </div></th>
      <th width="166"><div align="center" class="style1">User name </div></th>
      <th width="219"><div align="center" class="style1">Pet name </div></th>
      <th width="121"><div align="center" class="style1">Reason</div></th>
      <th width="213"><div align="center" class="style1">Request Date </div></th>
      <th width="76"><div align="center" class="style1">
        <div align="center">Request Status </div>
      </div></th>
      <th width="76"><div align="center" class="style1">Edit</div></th>
      <th width="80"><div align="center" class="style1">Delete</div></th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl=1;
	$sql="select * from pet_request pr,user_details ud,pet_details pd where pr.user_id=ud.user_id and pr.pet_details_id=pd.pet_details_id";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td height="67">&nbsp;<?php echo $sl++;?></td>
      <td width="200">&nbsp;<?php echo $row['user_first_name'];?></td>
      <td width="200">&nbsp;<?php echo $row['pet_name'];?></td>
      <td width="200">&nbsp;<?php echo $row['reason'];?></td>
      <td width="200">&nbsp;<?php echo $row['request_date'];?></td>
      <td width="200">&nbsp;<?php echo $row['request_status'];?></td>
      <td width="200"><a href="pet_request_edit.php?pet_request_id=<?php echo $row['pet_request_id'];?>">Edit</a></td>
      <td width="200"><a href="pet_request_delete.php?pet_request_id=<?php echo $row['pet_request_id'];?>">delete</a>
</td>
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
