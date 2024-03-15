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
<?php
include('../db_connect/db_connect.php');
$pet_details_id= $_REQUEST['pet_details_id'];
$sql="select * from pet_details where $pet_details_id=pet_details_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<blockquote>
  <form action="pet_details_update.php"  method="post" name="form1" id="formID">
    <table width="523" height="329" border="0" align="center">
      <tr>
        <td height="90" colspan="2"><div align="center" class="style1">Pet Details </div></td>
		<input type="hidden" name="pet_details_id" value="<?php echo $row['pet_details_id'];?>">
      </tr>
      <tr>
        <td width="218" height="70"><div align="center"><span class="style2">Pet category Id </span></div></td>
        <td width="269" height="70"><select name="pet_category_id" id="pet_category_id" class="form-control validate[required]">
		<option value="">select</option>
		<?php 
		$sql2="select * from pet_categories";
		$res2=mysqli_query($conn,$sql2);
		while($row2=mysqli_fetch_array($res2))
		{
		?>
		<option value="<?php echo $row2['pet_category_id'];?>" <?php if($row2['pet_category_id']==$row['pet_category_id']){?>selected <?php }?>><?php echo $row2['pet_category_name'];?></option>
		<?php
		}
		?>
        </select></td>
        <td width="8"></select><td width="8"></td>
      </tr>
      <tr>
        <td height="70"><div align="center"><span class="style2">Pet Name </span></div></td>
        <td height="70"><input name="pet_name" type="text" id="pet_name" class="form-control validate[required,custom[onlyLetter]]" value="<?php echo $row['pet_name'];?>"></td>
      </tr>
      <tr>
        <td height="90"><div align="center"><span class="style2">Pet Description </span></div></td>
        <td height="90"><textarea name="pet_description" id="pet_description" class="form-control validate[required]"><?php echo $row['pet_description'];?></textarea></td>
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
        <td height="70"><input name="date_of_birth" type="date" id="date_of_birth" class="form-control validate[required,custom[date]]" value="<?php echo $row['date_of_birth'];?>"></td>
      </tr>
      <tr>
        <td height="70"><div align="center"><span class="style2">Weight</span></div></td>
        <td height="70"><input name="weight" type="text" id="weight" class="form-control validate[required]" value="<?php echo $row['weight'];?>"></td>
      </tr>
      <tr>
        <td height="70"><div align="center"><span class="style2">Pet Photo </span></div></td>
        <td height="70"><input name="pet_photo" type="file" id="pet_photo" class="form-control validate[required]"></td>
      </tr>
      <tr>
        <td height="70"><div align="center"><span class="style2">Pet Price </span></div></td>
        <td height="70"><input name="pet_price" type="text" id="pet_price" class="form-control validate[required]" value="<?php echo $row['pet_price'];?>"></td>
      </tr>
      <tr>
        <td height="70" colspan="2"><div align="center">
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
