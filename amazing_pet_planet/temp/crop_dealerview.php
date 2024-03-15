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
                        <h1 class="page-head-line">Crop Dealers Details</h1>

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">

                    <div class="col-md-8">

                        <div class="table-responsive">
						<a href="crop_dealerform.php"><img src="assets/img/file_add.png" width="33" height="25"/></a>
						<p>&nbsp;</p>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
                                    <tr>

    <th>Sl_No</th>
    <th>Dealer_name</th>
    <th>Address</th>
    <th>Contact_no</th>
    <th>Email_id</th>
	<th>Logo</th>
    <th>Delete</th>
    <th>Edit</th>

                                    </tr>
                                </thead>
                                <tbody>
								
  <?php
 include('dbconnect.php');
 $s1=0;
  $sql="select * from crop_dealers";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  $sl=$sl+1;
  
  ?>

                                    <tr>
           <td><?php echo  $sl;?></td>                           
   
    <td><?php echo $row['dealer_name']?></td>
    <td><?php echo $row['address']?></td>
    <td><?php echo $row['contact_no']?></td>
    <td><?php echo $row['email_id']?></td>
	<td><img src="file/<?php echo $row['logo']?>"/></td>
    <td><a href="crop_dealerdelete.php?dealer_id=<?php echo $row['dealer_id']; ?>" onClick="return confirm('Are you sure want to delete?')">Delete</a></td>
    <td><a href="crop_dealeredit.php?dealer_id=<?php echo $row['dealer_id']; ?>" >Edit</a></td>

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
