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
<!-- <link rel="stylesheet" type="text/css" href="css/style_services.css"> -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="wrapper">
<div class="header">
<img src="img/ebook icon-.png">
<div class="login_reg">
      <a href="login.php">Registration</a>
      <a href="login.php">Login</a>
    </div>
</div>
     <ul>
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
           
          <div class="hed">  
        <h1>Our Services</h1>
          
              
              <div class="left_bar">
                    London<br>
                    Paris<br>
                    Tokyo
              </div>
              <div class="nav">
                  <a href="">User Add</a><br>
                  Paris<br>
                  Tokyo
              </div>
        
          <div class="accordian-area">
        <button class="accordion">Web based Application Development</button>
            <div class="panel">
              <p>In IECL we use proven software development methodology and best industry practices to provide you with the most suitable custom software solution in an agile and effective manner. Our experts will help you find the most optimal solution for your budget.
              custom solutions integration with your existing enterprise and other applications
              complete custom database modeling, development and implementation into your existing environment for Oracle, MS SQL, MySQL, MS Access and other relational databases
              application interface development.</p>
            </div>


            <button class="accordion">Web based Application Development</button>
            <div class="panel">
              <p>In IECL we use proven software development methodology and best industry practices to provide you with the most suitable custom software solution in an agile and effective 
            </p>
            </div>

            <button class="accordion">Web based Application Development</button>
            <div class="panel">
              <p>In IECL we use proven software development methodology and best industry practices to provide you with the most suitable custom software solution in an agile and effective .</p>
            </div>


            <button class="accordion">Web based Application Development</button>
            <div class="panel">
              <p>In IECL we use proven software development methodology and best industry practices to provide you with the most suitable custom software solution in an agile and effective .</p>
            </div>
            </div>
         
                <div class="sirves_sile">
                  <ul>
                  <li>
                     <ul class="demo-1 effect">
                        <li>
                            <h2>System Integration & Data Migration!</h2>
                            
                            <p>IECL combines this understanding with the technical know-how to get the job done. We identify business information needs, match them to systems and data sources, and identify the best tools to connect the dots efficiently. </p>
                        </li>
                        
                        <li><img class="top" src="images/image1.jpg" alt=""/></li>
                    </ul>
                </li>


                <li>
                     <ul class="demo-1 effect">
                        <li>
                            <h2>Ubiquitous Communication!</h2>
                            <p>IECL is concentrating on user engagement and user experience, user testing, data analysis, content strategy or social media, our strategic approach empowers us to be informed before we make any recommendations for you.</p>
                        </li>
                        
                        <li><img class="top" src="images/image2.jpg" alt=""/></li>
                    </ul>
                </li>



                <li>
                     <ul class="demo-1 effect">
                        <li>
                            <h2>IT Strategy & Architecture!</h2>
                            <p>We excel at helping companies assess their IT and business landscapes to develop technology strategies that address issues ranging from system replacement to full IT transformation. </p>
                        </li>
                        
                        <li><img class="top" src="images/image3.jpg" alt=""/></li>
                    </ul>
                </li>

                </ul>
                </div>
              
         
              
        </div> 
       

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
                <input id="submit_button1" type="submit" value="&#8680"/>
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
</div>
</body>
</html>

    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
      }
    }
    </script>