<?php include('header.php');  ?>

<style type="text/css">
<!--
.style1 {font-weight: bold}
.style2 {font-weight: bold}
.style3 {font-weight: bold}
.style4 {font-weight: bold; }
.style5 {font-weight: bold; }
.style6 {font-weight: bold; }
.style7 {font-weight: bold; }
.style8 {font-weight: bold; }
.style9 {font-weight: bold; }
.style10 {font-weight: bold; }
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
                        <h1 class="page-head-line">Pet  Details</h1>

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
      <th width="52" height="93"><div align="center" class="style3 style1">
        <div align="left">S no </div>
      </div></th>
      <th width="165"><div align="center" class="style3 style2">
        <div align="left">Pet category Name </div>
      </div></th>
      <th width="166"><div align="center" class="style3">
        <div align="left">Pet Name </div>
      </div></th>
      <th width="175"><div align="center" class="style4">
        <div align="left">Pet Description </div>
      </div></th>
      <th width="105"><div align="center" class="style5">
        <div align="left">Gender</div>
      </div></th>
      <th width="152"><div align="center" class="style6">
        <div align="left">DOB</div>
      </div></th>
      <th width="122"><div align="center" class="style7">
        <div align="left">Weight</div>
      </div></th>
      <th width="96"><div align="center" class="style8">
        <div align="left">Photo</div>
      </div></th>
      <th width="99"><div align="center" class="style9">
        <div align="left">Price</div>
      </div></th>
      <th width="108"><div align="center" class="style10">
        <div align="left">Request Now</div>
      </div></th>
  
    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl=1;
	$sql="select * from pet_details pd,pet_categories pc where pd.pet_category_id=pc.pet_category_id and pd.pet_status='Active'";
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
      <td>&nbsp;<img src="../images/<?php echo $row['pet_photo'];?>" width="100" height="100"></td>
      <td>&nbsp;<?php echo $row['pet_price'];?></td>
      <td><a href="pet_request_form.php?pet_details_id=<?php echo $row['pet_details_id'];?>" class="btn btn-primary">Request&nbsp;Now</a></td>
  
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
