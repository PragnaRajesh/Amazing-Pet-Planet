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
                      <h1 class="page-head-line">Pet Category </h1>

                  </div>
                </div>
                <div class="row">

                    <div class="col-md-12">

                        <div class="table-responsive">
						<a href="pet_categories_form.php" ><img src="assets/img/file_add.png" width="33" height="25" border="0"/></a>
						<p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" >
                                <thead>
    <tr>
      <td width="97"><div align="left"><strong>S No </strong></div></td>
      <td width="186"><div align="left"><strong>pet category name</strong></div></td>
      <td width="165"><div align="left"><strong>pet icons</strong></div></td>
      <td width="135"><div align="left"><strong>Edit</strong></div></td>
      <td width="176"><div align="left"><strong>Delete</strong></div></td>
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl=1;
	$sql="select * from pet_categories";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl++;?> </td>
      <td>&nbsp;<?php echo $row['pet_category_name'];?> </td>
      <td>&nbsp;<img src="../images/<?php echo $row['pet_icons'];?>" width="200"s height="200"</td>
      <td><a href="pet_categories_edit.php?pet_category_id=<?php echo $row['pet_category_id'];?>" class="btn btn-primary">Edit</a></td>
      <td><a href="pet_categories_delete.php?pet_category_id=<?php echo $row['pet_category_id'];?>" onClick="return confirm('Are u sure want to delete')" class="btn btn-danger">Delete</a>
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
