
<!DOCTYPE html>
<!-- /**
 *  @ Developed By IECL,
 *  @ Author By Md.Alamgir Hossen ,
 *  @ Start  Date : 14-Fer-2016,
 *  @ Copyright : IECL,
 *  @ Web Url : http:imed.gov.bd
 */ -->
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<img src="img/ebook icon-.png">
			<div class="login_reg">
		      <a href="registration-form.php">Registration</a>
		      <a href="login.php">Login</a>
		    </div>
		</div>
	    <div>
	      	<ul>
		        <li><a class="active" href="home.php">Home</a></li>
		        <li><a href="services.php">Services</a></li>
		        <li><a href="about.php">About Us</a></li>
		        <li><a href="contact.php">Contact Us</a></li>
	      </ul>
	    </div>
   			 <div class="hed">  
       			<h1>Get in touch</h1>
          	</div>
    		
		        <div class="nav">
					London<br>
					Paris<br>
					Tokyo
				</div>

				 <div class="left_bar_contact">
				 	<marquee><h1><i>Send Your Mail</i></h1></marquee>
					 <!-- Email -->
                      <a href="#">
                          <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
                      </a>
                   
                      <!-- Facebook -->
                      <marquee><h1><i>Connect With Facebook!</i></h1></marquee>
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                      </a>
                      
                      <!-- Google+ -->
                      <marquee><h1><i>Search With Google!</i></h1></marquee>
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
                      </a>
                      
                      <!-- LinkedIn -->
                      <marquee><h1><i>Connect With LinkedIn!</i></h1></marquee>
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
                      </a>
                      
                      <!-- Reddit -->
                      <marquee><h1><i>Connect With Reddit!</i></h1></marquee>
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
                      </a>
                      
                      <!-- Twitter -->
                      <marquee><h1><i>Connect With Twitter!</i></h1></marquee>
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                      </a>
				</div>
				<div class="gogle_text">
						
					
					<div class="ieclmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1824.946742582786!2d90.36253073318046!3d23.822386389020032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c12535420d2f%3A0xadb9d65f45eeba1!2sWoori+Bank%2C+Mirpur+Branch!5e0!3m2!1sen!2sbd!4v1459245768697"  allowfullscreen></iframe>

					</div>
					</div>
				<div class="contact_form_main">
          <?php
                //define variables and set to empty values
                $nameErr = $phoneErr = $emailErr = $messErr = "";
                $name = $phone = $email = $message = "";
                if (isset($_POST['submit'])) {
                  
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                  if (empty($_POST['name'])) {
                    $nameErr =  "* Name is required";
                  } else {
                    $name = test_input($_POST['name']);
                    if (!preg_match("/^[a-zA-Z]*$/", $name)) {
                      $nameErr = "Only letters and white space allowed"; 
                    }
                  }

                    if (empty($_POST['phone'])) {
                        $phoneErr = '* Phone Number is required';
                    } else {
                      $phone = test_input($_POST['phone']);
                    }

                      if (empty($_POST['email'])) {
                        $emailErr = '* Email is required';
                       
                      } else {
                        $email = test_input($_POST['email']);
                         // check if e-mail address is well-formed
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                          $emailErr = "Invalid email format";
                         }
                       }

                        if (empty($_POST['message'])) {
                         $messErr = '* Message is required';

                        } else {
                          $message = test_input($_POST['message']);
                        }

                
              }

                function test_input($data) {
                  $data = trim($data);
                  $data = stripcslashes($data);
                  $data = htmlentities($data);

                  return $data;
                }


            ?>

            <?php

                    if (isset($_POST['submit'])) {
                        $to = $_POST['email'];
                        $name = $_POST['name'];
                        $phone = $_POST['phone'];
                        $message = $_POST['message'];
                        $from = "alombd.bd@gmail.com";
                        $headers = "From:" . $from;

                        if (mail($to,$name, $phone, $message, $headers)) {
                            echo "<script>
                                         alert('Mail Send Successfully !!!!!'); 
                                    </script>";
                        }
                        else {
                            echo "<script>
                                         alert('Mail Send failed !!!!!'); 
                                    </script>";
                            
                        }

                    }


             ?>
						<form class="contact_form" method = 'POST' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  							<div class="row">
    								<label for="name">Your name:</label><br />
                    <span class="error"> <?php echo $nameErr;?></span>
    								<input id="name" class="input" name="name" type="text" value="" size="40" /><br />
  							</div>
  							<div class="row">
    							 <label for="name">Phone Number:</label><br />
                   <span class = 'error'><?php echo $phoneErr;?></span>
    								<input id="name" class="input" name="phone" type="text" value="" size="40" maxlength="11" /><br/>
  							</div>
    							<div class="row">
      								<label for="email">Your email:</label><br />
                      <span class = 'error'><?php echo $emailErr; ?></span>
      								<input id="name" class="input" name="email" type="email" value="" size="40" /><br />
    							</div>
  							<div class="row">
    								<label for="message">Your message:</label><br />
                    <span class = 'error'> <?php echo $messErr; ?></span>
    								<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
  							</div>

    							
                  <input id="reset_button" type="submit" name ='submit' value="Send Mail" />
    							<input id="reset_button" type="reset" value="Reset From" />
						</form>
					
				<div class="section-heading">
					<div><h2>Office Address</h2></div>
						<b>Information Entertainment & Communication Ltd.</b><br>
						<p>Plot No-1/9, Level-6, Padma Bhaban</p>
						<p>Pallabi, Mirpur, Dhaka-1216</p>
						<p>Phone: +8801771000096</p>
						<b>Email :</b>
						<p>alamgir [alamgir@iecl-bd.net]</p>
				</div>
					</div>
					<div>
				 <div class="footer_main">

            <div class="footer_bar">
             	 <div class="box1">
	                  <h1>About</h1>
	                  	Help you get your products to market faster?
          						Enhance maintain your enterprise applications?
          						Step at any stage of the development lifecycle?
          						Augment your staff with hard-to-find IT talent?
                </div>
                <div class="box2">
                 <h1>Support</h1>
  	                Web Application 
          					Business Process Remodeling
          					IT Consultancy Entry Services
          					System Integration & Data Migration
          					Data Analysis & Business Intelligence
                </div>
                <div class="box3">
                  <h1>Contact</h1>
                      
                <form method="post" action="contact.php">
                    <label for="email">Your email:</label><br />
                <input id="name1" class="input" name="email" type="text" placeholder="Enter mail" value="" size="40" />
                <!-- <input id="submit_button1" type="submit" value="&#8680"/> -->
                </form>
                </div>
                <div class="box4">
                  <h1>We're On it. </h1>
                  <div id="share-buttons">
                  
                     <!-- Email -->
                      <a href="#">
                          <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
                      </a>
                   
                      <!-- Facebook -->
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                      </a>
                      
                      <!-- Google+ -->
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
                      </a>
                      
                      <!-- LinkedIn -->
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
                      </a>
                      
                      <!-- Reddit -->
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
                      </a>
                      
                      <!-- Twitter -->
                      <a href="#" target="_blank">
                          <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                      </a>

                </div>
              </div>
                
              </div>
            </div>
            
             <div class="footer">
            	Copyright 2016 © alombd24.com
            </div>
        </div>

</div>

</body>
</html>

