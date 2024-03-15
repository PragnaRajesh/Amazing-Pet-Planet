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
                        <h1 class="page-head-line">Employ Details</h1>

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">

                    <div class="col-md-8">

                        <div class="table-responsive">
						<a href="employee_details_form.php"><img src="assets/img/file_add.png" width="33" height="25" border="0"/></a>
						<p>&nbsp;</p>
                            <table width="1637" height="161" class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <th width="84"><div align="center">S No </div></th>
      <th width="207"><div align="center" class="style2">Employee Name</div></th>
      <th width="197"><div align="center"><span class="style2">Employee Gender </span></div></th>
      <th width="188"><div align="center">Date of Birth </div></th>
      <th width="163"><div align="center"><span class="style2">Address</span></div></th>
      <th width="176"><div align="center"><span class="style2">Email Id </span></div></th>
      <th width="125"><div align="center"><span class="style2">Basic Salary </span></div></th>
      <th width="197"><div align="center"><span class="style2">Contact no</span></div></th>
      <th width="139"><div align="center"><span class="style2">Edit</span></div></th>
      <th width="119"><div align="center"><span class="style2">Delete</span></div></th>
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$s1=1;
	$sql="select * from employee_details";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td height="101">&nbsp;<?php echo $s1++;?> </td>
      <td>&nbsp;<?php echo $row['employee_name'];?> </td>
      <td>&nbsp;<?php echo $row['employee_gender'];?> </td>
      <td>&nbsp;<?php echo $row['date_of_birth'];?> </td>
      <td>&nbsp;<?php echo $row['employee_address'];?> </td>
      <td>&nbsp;<?php echo $row['e_mail'];?> </td>
      <td>&nbsp;<?php echo $row['basic_salary'];?> </td>
      <td>&nbsp;<?php echo $row['contact_no'];?> </td>
      <td><a href="employee_details_edit.php?employee_id=<?php echo $row['employee_id'];?>">Edit</a></td>
      <td><a href="employee_detail_delete.php?employee_id=<?php echo $row['employee_id'];?>">delete</a></td>
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
