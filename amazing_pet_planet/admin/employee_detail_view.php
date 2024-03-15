<?php include('header.php');  ?>


<style type="text/css">
<!--
.style1 {font-weight: bold}
.style2 {font-weight: bold}
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
                        <h1 class="page-head-line">Employee Details</h1>

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">

                    <div class="col-md-12">

                        <div class="table-responsive">
						<a href="employee_details_form.php"><img src="assets/img/file_add.png" width="33" height="25" border="0"/></a>
						<p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <th width="82"><div align="left"><strong>S No </strong></div></th>
      <th width="202"><div align="center" class="style2 style1">
        <div align="left">Employee Name</div>
      </div></th>
      <th width="193"><div align="left"><strong>Employee Gender </strong></div></th>
      <th width="159"><div align="left"><strong>Date of Birth </strong></div></th>
      <th width="159"><div align="left"><strong>Address</strong></div></th>
      <th width="159"><div align="left"><strong>Email Id </strong></div></th>
      <th width="159"><div align="left"><strong>Basic Salary </strong></div></th>
      <th width="150"><div align="left"><strong>Contact no</strong></div></th>
      <th width="130"><div align="left"><strong>Edit</strong></div></th>
      <th width="118"><div align="left"><strong>Delete</strong></div></th>
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
      <td>&nbsp;<?php echo $s1++;?> </td>
      <td>&nbsp;<?php echo $row['employee_name'];?> </td>
      <td>&nbsp;<?php echo $row['employee_gender'];?> </td>
      <td>&nbsp;<?php echo $row['date_of_birth'];?> </td>
      <td>&nbsp;<?php echo $row['employee_address'];?> </td>
      <td>&nbsp;<?php echo $row['e_mail'];?> </td>
      <td>&nbsp;<?php echo $row['basic_salary'];?> </td>
      <td>&nbsp;<?php echo $row['contact_no'];?> </td>
      <td><a href="employee_details_edit.php?employee_id=<?php echo $row['employee_id'];?>"class="btn btn-primary">Edit</a></td>
      <td><a href="employee_detail_delete.php?employee_id=<?php echo $row['employee_id'];?>"onClick="return confirm('Are u sure want to delete')" class="btn btn-danger">delete</a></td>
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
