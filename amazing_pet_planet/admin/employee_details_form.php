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
						
<form name="form1" id="formID" method="post" action="employee_details_insert.php">
  <table width="486" height="653" border="0" align="center">
    <tr>
      <td height="90" colspan="2"><div align="center"><span class="style1">Employee Details </span></div></td>
    </tr>
    <tr>
      <td width="334" height="70"><div align="center">
        <p class="style2">Employee Name</p>
        </div></td>
      <td width="367" height="70"><input name="employee_name" type="text" id="employee_name" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Gender</span></div></td>
      <td height="70"><input name="gender" type="radio" value="male" class="validate[required]">
        Male 
        <input name="gender" type="radio" value="female" class="validate[required]">
        Female</td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Date Of Birth </span></div></td>
      <td><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date_of_birth", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    </tr>
    <tr>
      <td height="90"><div align="center"><span class="style2">Address</span></div></td>
      <td height="90"><textarea name="address" id="address" class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Email Id </span></div></td>
      <td><input name="email_id" type="email" id="email_id" class="form-control validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td height="70"><div align="center"><span class="style2">Basic Salary </span></div></td>
      <td><input name="basic_salary" type="text" id="basic_salary" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="70"><div align="center" class="style2">Mob Number</div></td>
      <td><input name="mob_number" type="text" id="mob_number" class="form-control validate[required,custom[mobile]]"></td>
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