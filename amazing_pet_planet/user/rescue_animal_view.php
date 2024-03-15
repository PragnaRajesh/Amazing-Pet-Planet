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
                          <a href="rescue_animals_form.php"><img src="assets/img/file_add.png" width="33" height="25"/></a>                          
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
      <th width="200"><div align="left"><strong>Delete</strong></div></th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl=1;
	$uname=$_SESSION['uname'];
	$sql="select * from rescue_animal ra,user_details ud where ra.user_id=ud.user_id";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td height="58">&nbsp;<?php echo $sl++;?></td>
	  <td>&nbsp;<?php echo $row['user_first_name'];?></td>
      <td>&nbsp;<?php echo $row['pet_name'];?></td>
      <td>&nbsp;<?php echo $row['pet_description'];?></td>
      <td>&nbsp;<?php echo $row['rescue_description'];?></td>
      <td>&nbsp;<?php echo $row['gender'];?></td>
      <td>&nbsp;<?php echo $row['age'];?></td>
      <td>&nbsp;<img src="../images/<?php echo $row['photo'];?>" width="100" height="100"></td>
      <td>&nbsp;<?php echo $row['rescue_status'];?></td>
      <td><a href="rescue_animal_delete.php?rescue_animal_id=<?php echo $row['rescue_animal_id'];?>"onClick="return confirm('Are u sure want to cancel')" class="btn btn-danger">Delete</a></td>
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
