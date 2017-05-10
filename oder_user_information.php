<?php
	require 'db_conn.php';
	session_start();
  if(!isset($_SESSION['email'])){
   
     header('Location:login.php');
   }
?>
<!DOCTYPE html>
	<html>
	<head>

		<title>Order User Information</title>
		<meta content="noindex, nofollow" name="robots">
		<link href="css/oder_information.css" rel="stylesheet">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		  <title>jQuery UI Datepicker - Default functionality</title>
		  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
		  <link rel="stylesheet" href="/resources/demos/style.css">
		  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
		  <script>
		  $( function() {
		    $( "#datepicker" ).datepicker();
		  } );
		  </script>
	</head>
<body>
	<?php
		$firstnameErr = $lastnameErr = $emailErr = $phoneErr = $genderErr = $date_birthErr = $presentErr = '';
		$frist_name = $last_name = $email = $phone_number = $gender = $date_of_brith = $present_address = $permanent_address = '';

			$data_check = 0;

		if (isset($_POST['submit'])) {
			/*echo "<pre>";
			print_r($_POST); die();
			echo "</pre>";*/
			try {

				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				 if (empty($_POST['fristname'])) {
				 	$data_check = 1;
				 	$firstnameErr = 'Frist Name is required';
				 } else {
				 	$frist_name = $_POST['fristname'];
				 	if (!preg_match("/^[a-zA-Z ]*$/", $frist_name)) {
				 		 $fristnameErr = 'Only letters and white space allowed';
				 	}
				 } 


			 	if (empty($_POST['lastname'])) {
			 		$data_check = 1;
			 		$lastnameErr = 'Frist Name is required';
			 	} else {
			 		$last_name = $_POST['lastname'];
			 		if (!preg_match("/^[a-zA-Z]*/",$last_name)) {
			 			$lastnameErr = 'Only letters and white space allowed';
			 		}
			 	}

			 	if (empty($_POST['email'])) {
			 		$data_check = 1;
			 		$emailErr = 'E-mail is required';
			 	} else {
			 		$email = $_POST['email'];
			 		if (!filter_var(FILTER_VALIDATE_EMAIL)) {
			 			$emailErr = 'Invalid email format';
			 		}
			 	}

			 	if (empty($_POST['phonenumber'])) {
			 		$data_check = 1;
			 		$phoneErr = 'Phone Number is required';
			 	} else {
			 		$phone_number = $_POST['phonenumber'];
			 	}

			 	if (empty($_POST['gender'])) {
			 		$data_check = 1;
			 		$genderErr = 'Gender is required';
			 	} else {
			 		$gender = $_POST['gender'];
			 	}

			 	if (empty($_POST['date_of_brith'])) {
			 		$data_check = 1;
			 		$date_birthErr = 'Date of brith is required';
			 	} else {
			 		$date_of_brith = date('Y-m-d', strtotime($_POST['date_of_brith']));
			 	} 

			 	if (empty($_POST['present_add'])) {
			 		$data_check = 1;
			 		$presentErr = 'Present Address is required';
			 	} else {
			 		$present_address = $_POST['present_add'];
			 	}

			 	$permanent_address = $_POST['permanet_add'];

			 	//Profile image upload code start
			 	
			 		$file = rand(1000,100000)."-".$_FILES['image']['name'];
				    $file_loc = $_FILES['image']['tmp_name'];
				 	$file_size = $_FILES['image']['size'];
				 	$file_type = $_FILES['image']['type'];
				 	$folder="uploads/";
				 
				 	move_uploaded_file($file_loc,$folder.$file);
				 

			 	if ($data_check == 0) {

			 		$sql = "INSERT INTO orader_users_information(frist_name,last_name,email,
			 		phone_number,gender,date_of_birth,present_address,permanent_address,
			 			profile_photo) VALUES ('$frist_name','$last_name','$email',
			 		'$phone_number','$gender','$date_of_brith','$present_address',
			 		'$permanent_address','$file')";
			 		$conn->exec($sql);
			 		echo "<script>
                    alert('New record create Successfully !!!!!');
                    window.location = '/ebooks-Update-all/user_list.php';
                    </script>"; 
			 	}
			 	 

			} catch (Exception $e) {
				echo $sql ."<br>". $e->getMessage(); 
			  }

			$conn = null;
		}

	?>
<div class="maindiv">
<div class="form_div">
	<div class="title">
		<h2>User List From</h2>
		</div>
		<form action="" method="POST" enctype="multipart/form-data">
			<h2>Form</h2>
			<!-- span class="error">* required field.</span> -->
			First Name:<br>
			<input class="input" name="fristname" type="text" value="">
			<span class="error">* <?php echo $firstnameErr;?></span><br>
			Last Name:<br>
			<input class="input" name="lastname" type="text" value="">
			<span class="error">* <?php echo  $lastnameErr;?></span><br>
			E-mail Address:<br>
			<input class="input" name="email" type="email" value="">
			<span class="error">* <?php echo $emailErr;?></span><br>
			Phone Number:<br>
			<input class="input" name="phonenumber" type="text" value="">
			<span class="error">* <?php echo $phoneErr;?></span><br>
			Gender:
			<input class="radio" name="gender" type="radio" value="female" checked="checked">Female
			<input class="radio" name="gender" type="radio" value="male">Male
			<span class="error">*<?php echo $genderErr;?></span><br>
			Date of Birth:<br>
			<input class="input" placeholder="mm/dd/yyyy" name="date_of_brith" id="datepicker" type="text" value="">
			<span class="error">*<?php echo $date_birthErr;?></span><br>
			Present Address:<br>
			<textarea class = cols="40" name="present_add" rows="5">
			</textarea>
			<span class="error">*<?php echo $presentErr;?></span><br><br>
			 Permanent Address:<br>
			<textarea cols="40" name="permanet_add" rows="5">
			</textarea><br><br>
			Profile Picture :<br><br>
			<input calss='file' name='image' type = 'file'><br>
			<input class="submit" name="submit" type="submit" value="Submit">
			<a class="submit" href="book_list.php">Back</a>
		</form>

</div>
</body>
</html>