<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
 $first_part = $components[1];
?>
 <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                   
					 <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.jpg" class="img-thumbnail" />

                            <div class="inner-text">
                                Welcome <?php echo $_SESSION['uname'];?>
                            <br />
                                
                            </div>
                        </div>

                    </li>
                    
                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-home "></i>Home</a>
                    </li>
					<li>
                        <a  href="user_details_edit.php"><i class="fa fa-user"></i>User Profile</a>
                        
                    </li>
					 <li>
                        <a  href="pet_details_view.php"><i class="fa fa-paw "></i>Pet Details</a>
                        
                    </li>
                    <li>
                        <a href="pet_request_view.php"><i class="fa fa-shopping-cart"></i>Pet Request Details</a>
                        
                    </li>
					
                    <li>
                        <a href="user_payments_view.php"><i class="fa fa-money"></i>Payment Details</a>
                        
                    </li>

					<li>
                        <a href="ticket_booking_view.php"><i class="fa fa-ticket"></i>Ticket Booking Details</a>
                        
                    </li>
					<li>
                        <a href="rescue_animal_view.php"><i class="fa fa-life-ring"></i>Rescue Animal Details</a>
                        
                    </li>
					
					<li>
                    
                    </li>
                      <li>
                        <a href="change_password.php"><i class="fa fa-key "></i>Change Password</a>
                    </li>
                     <li>
                        <a href="../logout.php"><i class="fa fa-sign-out "></i>Logout</a>
                    </li>
                   
                </ul>

            </div>

        </nav>
