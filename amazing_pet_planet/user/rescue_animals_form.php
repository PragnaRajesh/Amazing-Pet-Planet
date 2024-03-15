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
                    <h1 class="page-head-line"> Rescue Animals Form</h1>
                        

                  </div>
              </div>
                <!-- /. ROW  -->

                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        
                        <div class="panel-body">
						
						<?php include('val.php'); ?>
<form action="rescue_animals_insert.php" enctype="multipart/form-data" method="post" name="form1" id="formID">
  <table width="531" height="772" border="0" align="center">
    <tr>
      <td height="70" colspan="2"><div align="center"><span class="style1">Rescue Animals</span></div></td>
    </tr>
    <tr>
      <td height="70"><div align="center">User Name </div></td>
      <td><select name="user_id" id="user_id" class="form-control validate[required]">
		<?php 
		include('../db_connect/db_connect.php');
		$uname=$_SESSION['uname'];
		$sql="select * from user_details where email_id='$uname'";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
		<option value="<?php echo $row['user_id'];?>" ><?php echo $row['user_first_name'];?></option>
		<?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td width="259" height="70"><div align="center"><span class="style2">Pet Name </span></div></td>
      <td width="262"><input name="pet_name" type="text" id="pet_name" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td height="90"><div align="center"><span class="style2">Pet Description </span></div></td>
      <td height="90"><textarea name="pet_description" id="pet_description" class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td height="90"><div align="center"><span class="style2">Rescue Description </span></div></td>
      <td height="90"><textarea name="rescue_description" id="rescue_description" class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Gender</span></div></td>
      <td><input name="gender" type="radio" value="male" class="validate[required]">      
        Male 
        <input name="gender" type="radio" value="female" class="validate[required]">
      Female</td></tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Age</span></div></td>
      <td><input name="age" type="text" id="age" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Photo</span></div></td>
      <td><input name="photo" type="file" id="photo" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="60" colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="Request">
        <input type="reset" name="Reset" class="btn btn-danger" value="Cancel">
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