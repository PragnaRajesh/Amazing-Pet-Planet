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
                        <h1 class="page-head-line">Food Detail Form</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        
                        <div class="panel-body">
						
						<?php include('val.php'); ?>
<form name="form1" id="formID" method="post" action="food_detail_insert.php">
  <table width="519" height="402" border="0" align="center">
    <tr>
      <td height="100" colspan="2"><div align="center"><span class="style1">Food Details </span></div></td>
    </tr>
    <tr>
      <td width="246" height="70"><div align="center"><span class="style2">Food Name </span></div></td>
      <td width="305"><input name="food_name" type="text" id="food_name" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Food Type </span></div></td>
      <td><input name="food_type" type="text" id="food_type" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="90"><div align="center"><span class="style2">Food Description </span></div></td>
      <td><textarea name="food_description" id="food_description" class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td height="60" colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
        <input type="reset" name="Reset" class="btn btn-danger" value="Reset">
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