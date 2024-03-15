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
                      <h1 class="page-head-line">Change Password </h1>

                  </div>
                </div>
                <div class="row">

                    <div class="col-md-12">

                        <div class="table-responsive">
                          <p>&nbsp;</p>
						  
<form name="form1" method="post" id="formID" action="changepassword.php" class="form-horizontal">
  <table class="table table-striped table-bordered" id="example">
    
    <tr>
      <td width="163">Old Password*</td>
      <td width="328"><input name="old_password" type="text" id="old_pwd" required="1" /></td>
    </tr>
    <tr>
      <td>New Password* </td>
      <td><input name="new_password" type="text" id="new_password" required="1" /></td>
    </tr>
    <tr>
      <td>Confirm Password* </td>
      <td><input name="confirm_password" type="text" id="con_pwd" required="1" /></td>
    </tr>
    <tr>
      <td height="29" colspan="2"><div align="center">
      <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
       </div></td>
    </tr>
  </table>
  <div align="center"></div>
</form>
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
	<?php include('val.php');?>
    <!-- /. WRAPPER  -->

<?php include('footer.php');  ?>

  </table>
</form>
</body>
</html>
