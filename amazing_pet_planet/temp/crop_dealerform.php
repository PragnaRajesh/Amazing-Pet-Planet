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
                        <h1 class="page-head-line">Crop Dealer Form</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        
                        <div class="panel-body">
						
						<?php include('val.php'); ?>
						
<form name="formID" id="formID" method="post" action="crop_dealerinsertion.php" enctype="multipart/form-data">
  <div align="center">
    <table width="303" height="260" border="0">
      <tr>
        <td colspan="2"><div align="center">CROP DEALER'S</div></td>
      </tr>
      <tr>
        <td>dealer_name</td>
        <td><input name="dealer_name" type="text" id="dealer_name" class="validate[required],custom[onlyLetter]"></td>
      </tr>
      <tr>
        <td>address</td>
        <td><textarea name="address" id="address"  class="validate[required]"></textarea></td>
      </tr>
      <tr>
        <td>contact_no</td>
        <td><input name="contact_no" type="text" id="contact_no" class="validate[required],custom[onlyNumber],length[10,12]"></td>
      </tr>
      <tr>
        <td>email_id        </td>
        <td><div align="left">
          <input name="email_id" type="text" id="email_id" class="validate[require],custom[email]">
        </div></td>
      </tr>
	  <tr>
        <td>Logo     </td>
        <td><div align="left">
          <input name="logo" type="file" id="logo" class="validate[require]">
        </div></td>
      </tr>
      <tr>
        <td colspan="2">
          <div align="center">
            <input type="submit" name="Submit" value="Submit">
            <input type="reset" name="Reset" value="Reset">
            </div></td>
      </tr>
      </table>  
   </div>
  <div align="left"></div>
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