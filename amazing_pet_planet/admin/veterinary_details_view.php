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
                      <h1 class="page-head-line">Veterinary Detail </h1>

                  </div>
                </div>
                <div class="row">

                    <div class="col-md-12">

                        <div class="table-responsive">
                          <a href="veterinary_details_form.php"><img src="assets/img/file_add.png" width="33" height="25"/></a>                          
                          <p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <th width="59"><div align="left"><strong>S No </strong></div></th>
      <th width="200"><div align="left"><strong>Veterinary Name </strong></div></th>
      <th width="200"><div align="left"><strong>Veterinary Description </strong></div></th>
      <th width="200"><div align="left"><strong>Edit</strong></div></th>
      <th width="200"><div align="left"><strong>Delete</strong></div></th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$s1=1;
	$sql="select * from veterinary_details";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $s1++;?></td>
      <td>&nbsp;<?php echo $row['veterinary_name'];?></td>
      <td>&nbsp;<?php echo $row['veterinary_description'];?></td>
      <td><a href="veterinary_details_edit.php?veterinary_id=<?php echo $row['veterinary_id'];?>"class="btn btn-primary">Edit</a></td>
      <td><a href="veterinary_details_delete.php?veterinary_id=<?php echo $row['veterinary_id'];?>"onClick="return confirm('Are u sure want to delete')" class="btn btn-danger">Delete</a></td>
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
