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
                      <h1 class="page-head-line">Rescue Animals</h1>

                  </div>
                </div>
                <div class="row">

                    <div class="col-md-12">

                        <div class="table-responsive">
                          <p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <th width="36" height="49"><div align="left"><strong>S No </strong></div></th>
      <th width="200"><div align="left"><strong>User Name </strong></div></th>
	  <th width="200"><div align="left"><strong>Pet Name </strong></div></th>
      <th width="200"><div align="left"><strong>Pet Description </strong></div></th>
      <th width="200"><div align="left"><strong>Rescue Description </strong></div></th>
      <th width="200"><div align="left"><strong>Gender</strong></div></th>
      <th width="200"><div align="left"><strong>Age</strong></div></th>
      <th width="200"><div align="left"><strong>Photo</strong></div></th>
      <th width="200"><div align="left"><strong>Rescue Status </strong></div></th>
      <th width="200"><div align="left"><strong>Accept</strong></div></th>
	   <th width="200"><div align="left"><strong>Reject</strong></div></th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl=1;
	$sql="select * from rescue_animal ra,user_details ud where ra.user_id=ud.user_id";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td height="58">&nbsp;<?php echo $sl++;?></td>
      <td>&nbsp;<a href="user_details_edit.php?user_id=<?php echo $row['user_id'];?>"><?php echo $row['user_first_name'];?>&nbsp;<?php echo $row['user_last_name'];?></a></td>
	  <td>&nbsp;<?php echo $row['pet_name'];?></td>
      <td>&nbsp;<?php echo $row['pet_description'];?></td>
      <td>&nbsp;<?php echo $row['rescue_description'];?></td>
      <td>&nbsp;<?php echo $row['gender'];?></td>
      <td>&nbsp;<?php echo $row['age'];?></td>
      <td>&nbsp;<img src="../images/<?php echo $row['photo'];?>" width="100" height="100"></td>
      <td>&nbsp;<?php echo $row['rescue_status'];?></td>
      <td><a href="rescue_animal_accept.php?rescue_animal_id=<?php echo $row['rescue_animal_id'];?>" onClick="return confirm('Are u sure want to Accept')" class="btn btn-primary">Accept</a></td>
	   <td><a href="rescue_animal_reject.php?rescue_animal_id=<?php echo $row['rescue_animal_id'];?>" onClick="return confirm('Are u sure want to Reject')" class="btn btn-danger">Reject</a></td>
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
