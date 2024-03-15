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
                        <h1 class="page-head-line">Pet Details Form</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        
                        <div class="panel-body">
						
						<?php include('val.php'); ?>
  <form action="pet_details_insert.php" enctype="multipart/form-data" method="post" name="form1" id="formID">
    <table width="523" height="329" border="0" align="center">
      <tr>
        <td height="90" colspan="2"><div align="center" class="style1">Pet Details </div></td>
      </tr>
      <tr>
        <td width="236" height="70"><div align="center"><span class="style2">Pet category Name </span></div></td>
        <td width="271" height="70"><select name="pet_category_id" id="pet_category_id" class="validate[required]">
          <option value="" selected>select</option>
          <?php 
		include('../db_connect/db_connect.php');
		$sql="select * from pet_categories";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
		?>
          <option value="<?php echo $row['pet_category_id'];?>"><?php echo $row['pet_category_name'];?></option>
          <?php
		}
		?>
        </select></td>
      </tr>
      <tr>
        <td height="70"><div align="center"><span class="style2">Pet Name </span></div></td>
        <td height="70"><input name="pet_name" type="text" id="pet_name" class="form-control validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td height="90"><div align="center"><span class="style2">Pet Description </span></div></td>
        <td height="90"><textarea name="pet_description" id="pet_description" class="form-control validate[required]"></textarea></td>
      </tr>
      <tr>
        <td height="70"><div align="center"><span class="style2">Pet Gender </span></div></td>
        <td height="70"><input name="pet_gender" type="radio" value="male" class="validate[required]">
          Male 
          <input name="pet_gender" type="radio" value="female" class="validate[required]">
          Female</td>
      </tr>
      <tr>
        <td height="70"><div align="center"><span class="style2">Date of birth </span></div></td>
        <td height="70"><input name="date_of_birth" type="date" id="date_of_birth" class="form-control validate[required,custom[date]]"></td>
      </tr>
      <tr>
        <td height="70"><div align="center"><span class="style2">Weight</span></div></td>
        <td height="70"><input name="weight" type="text" id="weight" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td height="70"><div align="center"><span class="style2">Pet Photo </span></div></td>
        <td height="70"><input name="pet_photo" type="file" id="pet_photo" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td height="70"><div align="center"><span class="style2">Pet Price </span></div></td>
        <td height="70"><input name="pet_price" type="text" id="pet_price" class="form-control validate[required]"></td>
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