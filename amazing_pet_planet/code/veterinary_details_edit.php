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
                        <h1 class="page-head-line">Veterinary Details Form</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        
                        <div class="panel-body">
						
						<?php include('val.php'); ?>
<?php
include('../db_connect/db_connect.php');
$veterinary_id= $_REQUEST['veterinary_id'];
$sql="select * from veterinary_details where $veterinary_id=veterinary_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" id="formID" method="post" action="veterinary_detail_update.php">
  s

  <table width="514" height="341" border="0" align="center">
    <tr>
	
      <td height="100" colspan="2"><div align="center"><span class="style1">Veterinary Details </span></div></td>
	  <input type="hidden" name="veterinary_id" value="<?php echo $row['veterinary_id'];?>">
    </tr>
    <tr>
      <td width="273" height="80"><div align="center"><span class="style2">Veterinary Name </span></div></td>
      <td width="225"><input name="veterinary_name" type="text" id="veterinary_name" class="form-control validate[required]" value="<?php echo $row['veterinary_name'];?>"></td>
    </tr>
    <tr>
      <td height="100"><div align="center"><span class="style2">Veterinary Description </span></div></td>
      <td height="100"><textarea name="veterinary_description" id="veterinary_description" class="form-control validate[required]"><?php echo $row['veterinary_description'];?></textarea></td>
    </tr>
    <tr>
      <td height="69" colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
      </div></td>
    </tr>
  </table>
</form>
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