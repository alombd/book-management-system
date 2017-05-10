<?php
    require 'db_conn.php';
?>
<!DOCTYPE html>
<!-- /**
 *  @ Developed By IECL,
 *  @ Author By Md.Alamgir Hossen ,
 *  @ Start  Date : 14-Fer-2016,
 *  @ Copyright : IECL,
 */ -->
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/loginpages.css">
    <style type="text/css">
    .error{
      color: #FF0000;
      float: right;
    }
    </style>
</head>
<body>
 <?php
    $fristnameErr = $lastnameErr = $emailErr = $passwordErr =  
    $passLenErr= $matchErr = $conn_passErr = $phoneErr= '';
    $fristname = $lastname = $email = $password = $conn_pass = $phone ='';

    if ( isset( $_POST['submit'] )) {
        $flag = 0;
      try {

         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        if (empty($_POST['name'])) {
                            $flag = 1;
                            $fristnameErr = 'Frist Name is required';
                        } else {
                            $fristname = $_POST['name'];
                        if (!preg_match("/^[a-zA-Z ]*$/", $fristname)) {
                            $fristnameErr = 'Only letters and white space allowed';
                            }
                        }

                        if (empty($_POST['lastname'])) {
                            $flag = 1;
                            $lastnameErr = 'Last Name is required';
                        } else {
                            $lastname = $_POST['lastname'];
                        if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
                            $lastnameErr ='Only letters and white space allowed';
                            }
                        }

                        if (empty($_POST['email'])) {
                            $flag = 1;
                            $emailErr = 'Email is required';
                        } else {
                            $email     = $_POST['email'];
                        if (!filter_var(FILTER_VALIDATE_EMAIL)) {
                            $emailErr = 'Invalid email address';
                            }
                        }

                        if(empty($_POST['password'])){
                            $flag = 1;
                            $passwordErr = 'Password is required';
                        } elseif(strlen($_POST['password']) < 8){
                            $flag = 1;
                            $passLenErr = 'Minimum 8 charter Password';
                        } elseif(empty($_POST['repassword'])){
                            $flag = 1;
                            $conn_passErr = 'Connfrim Password is required';
                        } if($_POST['password'] !== $_POST['repassword']){
                            $flag = 1;
                            $matchErr = "Password doesn't match.";
                        } else {
                            $password = md5($_POST['password']);
                        }


                        if (empty($_POST['phone'])) {
                            $flag = 1;
                            $phoneErr = 'Phone Number is required';
                        } else {
                            $phone     = $_POST['phone'];
                        }

                    if ($flag == 0) {
                        $sql = "INSERT INTO users(frist_name,last_name,email,password,conn_password,phone_number)
                        VALUES ('$fristname','$lastname','$email','$password','$conn_pass','$phone')";
                        $conn->exec($sql);
                        echo "<script>
                        alert('New record create Successfully !!!!!');
                        window.location = '/ebooks-Update-all/'login.php
                        </script>";
                        } 
                       
                    } catch (Exception $e) {
                        echo $sql ."<br>". $e->getMessage(); 
                         }
                $conn = null;
                  
    }
?>


      <div class="login-page">
        <div class="form">
            <h3>Registration Form</h3>
            <div class="ebook_icon">
                <img src="img/ebook icon-.png">
              </div>
              
            <form  method='post' action='registration-form.php'>
                <span class='error'>* <?php echo !empty($fristnameErr) ? $fristnameErr:""; ?></span><br>
                <input id="name" name="name" placeholder="First Name"  tabindex="1" type="text">
                 
                <span class ='error'>* <?php echo !empty($lastnameErr) ? $lastnameErr:""; ?></span><br>
                <input id="name" name="lastname" placeholder="Last Name"  tabindex="1" type="text">

                 <span class ='error'>* <?php echo !empty($emailErr) ? $emailErr:""; ?></span><br>
                <input id="email" name="email" placeholder="Enter Your Mail" type="email">
                 
                <span class ='error'>* <?php echo !empty($passwordErr) ? $passwordErr :"";  echo !  empty($matchErr) ? $matchErr :""; ?></span><br>
                <input type="password" id="password" name="password" placeholder="Minimum Length – 8 characters(Password)">
                 <span class ='error'>* <?php echo !empty($conn_passErr) ? $conn_passErr : ""; ?></span><br>
                <input type="password" id="password" name="repassword" placeholder="Confrim Password">
                <span class ='error'>* <?php echo !empty($phoneErr) ? $phoneErr : ""; ?></span><br>
                <input id="phone" name="phone" placeholder="Phone Number"type="text">
                
                <button type= 'submit' name='submit'>login</button>
                <p class="message">Not registered? <a href="login.php">Login</a></p>
                 <p class="message"><a href="index.php">Back</a></p>
            </form> 
        </div>
  </div>
    
  </body>
</html>

