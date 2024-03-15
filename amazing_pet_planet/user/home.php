<?php include('header.php');  ?>

<body>
    <div id="wrapper">
	
	<?php include('top_nav.php');  ?>
        <!-- /. NAV TOP  -->
		<?php include('cal.php');  ?>
	<?php include('side_nav.php');  ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Welcome to User</h1>
                        
						
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
	
	$sql="select * from pet_categories";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>

<div class="responsive">
  <div class="gallery">
    <a  href="pet_details_view_category.php?pet_category_id=<?php echo $row['pet_category_id'];?>">
      <img src="../images/<?php echo $row['pet_icons'];?>" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc"><?php echo $row['pet_category_name'];?></div>
  </div>
</div>

<?php
}
?>



<div class="clearfix"></div>



                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        
                        <div class="panel-body">
						
						     </div>
						   
						   <div class="form-group">
                                  
													<!---date---------->
									<div align="left" class="style3">
											&nbsp;
										</div>
										
										<!---date---------->
                                        </div>
                                        
                            </div>
                        </div>
                            </div>


        </div>
                <!--/.ROW-->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
	
<?php include('footer.php');  ?>