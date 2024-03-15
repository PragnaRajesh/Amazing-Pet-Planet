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
                        <h1 class="page-head-line">Pet  Details</h1>

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">

                    <div class="col-md-8">

                        <div class="table-responsive">
						<a href="pet_details_form.php"><img src="assets/img/file_add.png" width="33" height="25" border="0"/></a>
						<p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <th width="52" height="93"><div align="center" class="style3">S no </div></th>
      <th width="165"><div align="center" class="style3">Pet category Name </div></th>
      <th width="166"><div align="center" class="style3">Pet Name </div></th>
      <th width="175"><div align="center" class="style3">Pet Description </div></th>
      <th width="105"><div align="center" class="style3">Gender</div></th>
      <th width="152"><div align="center" class="style3">DOB</div></th>
      <th width="122"><div align="center" class="style3">Weight</div></th>
      <th width="96"><div align="center" class="style3">Photo</div></th>
      <th width="99"><div align="center" class="style3">Price</div></th>
      <th width="108"><div align="center" class="style3">Edit</div></th>
      <th width="124"><div align="center" class="style3">Delete</div></th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl=1;
	$sql="select * from pet_details pd,pet_categories pc where pd.pet_category_id=pc.pet_category_id";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td height="94">&nbsp;<?php echo $sl++;?></td>
      <td>&nbsp;<?php echo $row['pet_category_name'];?></td>
      <td>&nbsp;<?php echo $row['pet_name'];?></td>
      <td>&nbsp;<?php echo $row['pet_description'];?></td>
      <td>&nbsp;<?php echo $row['pet_gender'];?></td>
      <td>&nbsp;<?php echo $row['date_of_birth'];?></td>
      <td>&nbsp;<?php echo $row['weight'];?></td>
      <td>&nbsp;<img src="../images/<?php echo $row['pet_photo'];?>" width="100" height="100"</td>
      <td>&nbsp;<?php echo $row['pet_price'];?></td>
      <td><a href="pet_details_edit.php?pet_details_id=<?php echo $row['pet_details_id'];?>">Edit</a></td>
      <td><a href="pet_details_delete.php?pet_details_id=<?php echo $row['pet_details_id'];?>">delete</a>
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
