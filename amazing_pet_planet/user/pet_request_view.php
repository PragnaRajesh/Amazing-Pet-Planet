<?php include('header.php');  ?>

<style type="text/css">
<!--
.style1 {font-weight: bold}
.style2 {font-weight: bold; }
.style3 {font-weight: bold; }
.style4 {font-weight: bold; }
.style5 {font-weight: bold; }
.style6 {font-weight: bold; }
.style7 {font-weight: bold; }
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
                      <h1 class="page-head-line">Pet Request </h1>

                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">

                        <div class="table-responsive">
						
						<p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
    <tr>
      <th width="66"><div align="center" class="style1 style1">
        <div align="left">S No </div>
      </div></th>
      <th width="166"><div align="center" class="style2">
        <div align="left">User name </div>
      </div></th>
      <th width="219"><div align="center" class="style3">
        <div align="left">Pet name </div>
      </div></th>
	  <th width="219"><div align="center" class="style3">
        <div align="left">Pet Price </div>
      </div></th>
      <th width="121"><div align="center" class="style4">
        <div align="left">Reason</div>
      </div></th>
      <th width="213"><div align="center" class="style5">
        <div align="left">Request Date </div>
      </div></th>
      <th width="76"><div align="center" class="style6">
        <div align="left">Request Status</div>
      </div></th>
      <th width="76"><div align="center" class="style7">
        <div align="left">Pay Now</div>
      </div></th>

    </tr>
	</thead>
	<tbody>
	<?php
	include('../db_connect/db_connect.php');
	$sl=1;
	$uname=$_SESSION['uname'];
	$sql="select * from pet_request pr,user_details ud,pet_details pd where pr.user_id=ud.user_id and pr.pet_details_id=pd.pet_details_id and ud.email_id='$uname'";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td height="67">&nbsp;<?php echo $sl++;?></td>
      <td width="200">&nbsp;<?php echo $row['user_first_name'];?></td>
      <td width="200">&nbsp;<?php echo $row['pet_name'];?></td>
	   <td width="200">&nbsp;<?php echo $row['pet_price'];?></td>
      <td width="200">&nbsp;<?php echo $row['reason'];?></td>
      <td width="200">&nbsp;<?php echo $row['request_date'];?></td>
      <td width="200">&nbsp;<?php echo $row['request_status'];?></td>
      <td width="200"><?php if($row['request_status']=='Accept') { ?><a href="pay_now.php?pet_details_id=<?php echo $row['pet_details_id']; ?>&pet_request_id=<?php echo $row['pet_request_id'];?>&pet_name=<?php echo $row['pet_name'];?>&pet_price=<?php echo $row['pet_price'];?>" class="btn btn-primary">Pay Now</a> <?php } ?></td>

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
