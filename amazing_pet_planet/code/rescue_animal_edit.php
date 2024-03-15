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
                        <h1 class="page-head-line">Employee Details Form</h1>
                        

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
$rescue_animal_id= $_REQUEST['rescue_animal_id'];
$sql="select * from rescue_animal where $rescue_animal_id=rescue_animal_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form action="rescue_animals_update.php" method="post" name="form1" id="formID">
  <table width="526" height="646" border="0" align="center">
    <tr>
      <td height="70" colspan="2"><div align="center"><span class="style1">Rescue Animals</span></div></td>
	  <input type="hidden" name="rescue_animal_id" value="<?php echo $row['rescue_animal_id'];?>">
    </tr>
    <tr>
      <td width="259" height="70"><div align="center"><span class="style2">Pet Name </span></div></td>
      <td width="257"><input name="pet_name" type="text" id="pet_name" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['pet_name'];?>"></td>
    </tr>
    <tr>
      <td height="90"><div align="center"><span class="style2">Pet Description </span></div></td>
      <td height="90"><textarea name="pet_description" id="pet_description"><?php echo $row['pet_description'];?></textarea></td>
    </tr>
    <tr>
      <td height="90"><div align="center"><span class="style2">Rescue Description </span></div></td>
      <td height="90"><textarea name="rescue_description" id="rescue_description" class="form-control validate[required]"><?php echo $row['rescue_description'];?></textarea></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Gender</span></div></td>
      <td><input name="gender" type="radio" value="male" class="validate[required]" checked>      
        Male 
        <input name="gender" type="radio" value="female" class="validate[required]">
      Female</td></tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Age</span></div></td>
      <td><input name="age" type="text" id="age" class="form-control validate[required]" value="<?php echo $row['age'];?>"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Photo</span></div></td>
      <td><input name="photo" type="file" id="photo" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="90"><div align="center" class="style2">Rescue Status </div></td>
      <td height="90"><input name="rescue_status" type="text" id="rescue_status" class="form-control validate[required]" value="<?php echo $row['rescue_status'];?>"></td>
    </tr>
    <tr>
      <td height="60" colspan="2"><div align="center">
        <input type="submit" name="Submit" class="btn btn-primary" value="Request">
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
