<?php include('header.php');  ?>

<style type="text/css">
<!--
.style1 {font-weight: bold}
.style2 {font-weight: bold; }
.style3 {font-weight: bold; }
.style4 {font-weight: bold; }
.style5 {font-weight: bold; }
-->
</style>
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
						<a href="pet_categories_form.php"><img src="assets/img/file_add.png" width="33" height="25" border="0"/></a>
						<p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <td width="97"><div align="center" class="style1 style1">
        <div align="left">S No </div>
      </div></td>
      <td width="186"><div align="center" class="style2">
        <div align="left">pet category name</div>
      </div></td>
      <td width="165"><div align="center" class="style3">
        <div align="left">pet icons</div>
      </div></td>
      <td width="135"><div align="center" class="style4">
        <div align="left">Edit</div>
      </div></td>
      <td width="176"><div align="center" class="style5">
        <div align="left">Delete</div>
      </div></td>
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sql="select * from pet_categories";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $row['pet_category_id'];?> </td>
      <td>&nbsp;<?php echo $row['pet_category_name'];?> </td>
      <td>&nbsp;<img src="../images/<?php echo $row['pet_icons'];?>" width="100"s height="100"</td>
      <td><a href="pet_categories_edit.php?pet_category_id=<?php echo $row['pet_category_id'];?>">Edit</a></td>
      <td><a href="pet_categories_delete.php?pet_category_id=<?php echo $row['pet_category_id'];?>">delete</a>
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
