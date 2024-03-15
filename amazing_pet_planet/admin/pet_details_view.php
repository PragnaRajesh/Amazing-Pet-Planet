<?php include('header.php');  ?>

<style type="text/css">
<!--
.style11 {font-weight: bold}
.style12 {font-weight: bold}
.style13 {font-weight: bold}
.style14 {font-weight: bold}
.style15 {font-weight: bold}
.style16 {font-weight: bold}
.style17 {font-weight: bold}
.style18 {font-weight: bold}
.style19 {font-weight: bold}
.style20 {font-weight: bold}
.style21 {font-weight: bold}
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
						<a href="pet_details_form.php"><img src="assets/img/file_add.png" width="33" height="25" border="0"/></a>
						<form name="form1" method="post" action="pet_details_view_next.php">
						  SELECT ANIMAL CATEGORY
						    <select name="PET_CAT" id="PET_CAT">
                              <?php
						  include('../db_connect/db_connect.php');
	
	$sql="select distinct(pd.PET_CAT) from pet_details pd,pet_categories pc where pd.pet_category_id=pc.pet_category_id";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	
	?>
                              <option><?php echo $row['PET_CAT'];?></option>
                              <?php
						  }?>
                            </select>                          
					      <input type="submit" name="Submit" value="Submit">
                        </form>
						<p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <th width="52" height="93"><div align="center" class="style20">
        <div align="left">S no </div>
      </div></th>
      <th width="165"><div align="center" class="style21">
        <div align="left">Pet category Name </div>
      </div></th>
	    <th width="165"><div align="center" class="style21">
        <div align="left">PET CATEGORY </div>
      </div></th>
      <th width="166"><div align="center" class="style11">
        <div align="left">Pet Name </div>
      </div></th>
      <th width="175"><div align="center" class="style12">
        <div align="left">Pet Description </div>
      </div></th>
      <th width="105"><div align="center" class="style13">
        <div align="left">Gender</div>
      </div></th>
      <th width="152"><div align="center" class="style14">
        <div align="left">DOB</div>
      </div></th>
      <th width="122"><div align="center" class="style15">
        <div align="left">Weight</div>
      </div></th>
      <th width="96"><div align="center" class="style16">
        <div align="left">Photo</div>
      </div></th>
      <th width="99"><div align="center" class="style17">
        <div align="left">Price</div>
      </div></th>

      <th width="99"><div align="center" class="style17">
        <div align="left">Status</div>
      </div></th>
      <th width="108"><div align="center" class="style18">
        <div align="left">Edit</div>
      </div></th>
      <th width="124"><div align="center" class="style19">
        <div align="left">Delete</div>
      </div></th>
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
	  <td>&nbsp;<?php echo $row['PET_CAT'];?></td>
      <td>&nbsp;<?php echo $row['pet_name'];?></td>
      <td>&nbsp;<?php echo $row['pet_description'];?></td>
      <td>&nbsp;<?php echo $row['pet_gender'];?></td>
      <td>&nbsp;<?php echo $row['date_of_birth'];?></td>
      <td>&nbsp;<?php echo $row['weight'];?></td>
      <td>&nbsp;<img src="../images/<?php echo $row['pet_photo'];?>" width="100" height="100"></td>
      <td>&nbsp;<?php echo $row['pet_price'];?></td>
	     <td>&nbsp;<?php echo $row['pet_status'];?></td>
      <td><a href="pet_details_edit.php?pet_details_id=<?php echo $row['pet_details_id'];?>"class="btn btn-primary">Edit</a></td>
      <td><a href="pet_details_delete.php?pet_details_id=<?php echo $row['pet_details_id'];?>"onClick="return confirm('Are u sure want to delete')" class="btn btn-danger">Delete</a>
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
