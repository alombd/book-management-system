<!DOCTYPE html>
<?php
session_start();
require 'db_conn.php';
?>
<!-- /**
 *  @ Developed By IECL,
 *  @ Author By Md.Alamgir Hossen ,
 *  @ Start  Date : 14-Fer-2016,
 *  @ Copyright : IECL,
 */ -->

<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = $_POST['email'];
        $pass  = md5($_POST['password']);

        $check_user = "select * from users where email='$email' and password = '$pass'";
        $sql_prep = $conn->prepare($check_user);
        $sql_prep->execute();
        $query_result = $sql_prep->fetch();

        $query = $conn->query($check_user);        
        $user_count = $query->rowcount();
        echo "<pre>";

        if ($user_count == 0) {
            echo "<script> alert('E-mail or password worng !!!!!'); </script>";
        } else {
          $email = $query_result['email'];
          $role_id = $query_result['role_id'];
          $_SESSION['email'] = $email;
          $_SESSION['role_id'] = $role_id;
           header('Location:book_list.php');
          ?>
          <script>
            alert('Login Successfully!!!!');
           </script>
           <?php
        }
    } 

?>

<html >
  <head>
        <meta charset="UTF-8">
        <title>Register/Login Form</title>
        <link rel="stylesheet" href="css/loginpages.css">
 </head>
 <body>
    <div class="login-page">
      <div class="form">
        <div class="ebook_icon">
            <img src="img/ebook icon-.png">
        </div>
        <form method='POST' action=''>
              <input type="email" placeholder="E-mail" name='email'/>
              <input type="password" placeholder="Password" name='password'/>
              <button name='submit'>login</button>
              <p class="message">Not registered? <a href="registration-form.php">Create an account</a></p>
              <p class="message"><a href="index.php">Back</a></p>
        </form>
      </div>
    </div>   
  </body>
</html>

