<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="login/css/style.css">
</head>
<body>

    <div class="main">
<?php include('val.php');?>
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form register-form" id="formID"  action="reg_insert.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="first_name" id="name" class="form-control validate[required,custom[onlyLetter]]"  placeholder="First Name"/>
                            </div>
                            
							 <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="last_name" id="last_name" class="form-control validate[required,custom[onlyLetter]]" placeholder="Last Name"/>
                            </div>
							
							<div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="address" id="address" class="validate[required]" placeholder="Address"/>
                            </div>
							
							<div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="tel" name="contact_no" id="contact_no" pattern="[6-9]{1}[0-9]{9}"
  title="Phone number starts with 6-9 and remaing 9 digit with 0-9" placeholder="Contact No"/>
                            </div>
                          
						  <div class="form-group">
						  
						  Select Gender
                                <select name="gender" id="gender" class="validate[required]">
								<option value="">Select</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="other">Other</option>
								</select>
                            </div>
                           
							
							<div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email_id" id="email" class="form-control validate[required,custom[email]]" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password"  name="password" id="pass"class="validate[required]" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required    placeholder="Password"/>
                            </div>
							
							
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="login/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
       
    </div>

    <!-- JS -->
    <
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>