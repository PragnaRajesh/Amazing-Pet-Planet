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
                        <h1 class="page-head-line">Pet Categories Form</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        
                        <div class="panel-body">
						
						<?php include('val.php'); ?>
<form  action="pet_categories_insert.php" method="post"  name="form1" id="formID">
  <table width="511" height="287" border="0" align="center">
    <tr>
      <td height="90" colspan="2"><div align="center"><span class="style1"><span class="style1">Pet categories </span></span></div></td>
    </tr>
    <tr>
      <td width="232" height="70"><div align="center" class="style2">Pet category name </div></td>
      <td width="315" height="70"><input type="text" class="validate[required,custom[onlyLetter]]" name="pet_category_name" id="pet_category_name"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">pet icons</span></div></td>
      <td height="70"><input name="pet_icons" type="file" id="pet_icons" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="70" colspan="2"><div align="center">
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
