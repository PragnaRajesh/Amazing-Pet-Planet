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
						
						<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<h2>Pet Category Gallery</h2>

<h4>Pet Categories.</h4>


	<?php
	include('../db_connect/db_connect.php');
	$pet_category_id=$_REQUEST['pet_category_id'];
	$sql="select * from pet_details pd,pet_categories pc where pd.pet_category_id=pc.pet_category_id and pd.pet_category_id='$pet_category_id' and pd.pet_status='Active'";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>

<div class="responsive">
  <div class="gallery">
    
      <img src="../images/<?php echo $row['pet_photo'];?>" alt="Cinque Terre" width="600" height="400">
    
    <div class="desc"><strong><?php echo $row['pet_name'];?>&nbsp;(<?php echo $row['pet_category_name'];?>)</strong></div>

	<div class="desc"><strong>Rs.<?php echo $row['pet_price'];?></strong></div>
	<div class="desc"><a href="pet_request_form.php?pet_details_id=<?php echo $row['pet_details_id'];?>" class="btn btn-primary">Request&nbsp;Now</a></div>
  </div>
</div>

<?php
}
?>



<div class="clearfix"></div>

						<p>&nbsp;</p>
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
