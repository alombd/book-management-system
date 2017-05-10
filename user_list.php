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
		<title>
		</title>
		<style type="text/css">
	.table tr td {
	  border-style: solid;
      border-width: 0.5px;
      background-color: #ddffff !important;
       border-radius: 5px;
	}

	.button6 {
    background-color: #555555; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10px;
}
.delete{
	background-color: red !important;
}
.edit{
	background-color: #FFA500 !important;
}

.button  {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 9px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button5 {
	border-radius: 40%;
   
}
		</style>
	</head>
	<body>
		<h1>User List</h1>
		<?php
			echo "<table class='table'> 
			<tr>
			    <td><b>ID</b></td>
			    <td><b>First Name</b></td>
			    <td><b>Last Name </b></td>
			    <td><b>E-mail</b></td>
			    <td><b>Phone Number</b></td>
			    <td><b>Gander</b></td>
			    <td><b>Date Of Birth</b></td>
			    <td><b>Present Address</b></td>
			    <td><b>Permanent Address</b></td>
			    <td><b>Profile Photo</b></td>
			    <td><b>Date Of Time</b></td>
			    <td><b>Action</b></td>
			    <td><b>Action</b></td>
			     <td><b>Action</b></td>
			   
			</tr>";
				$hostname = "localhost";
				$username = "root";
				$password = "";
				$dbname   ="ebook";
				try {

				  $conn = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
				  $query = $conn->prepare("SELECT * FROM orader_users_information");
				  $query->execute();
				  $result = $query->fetchall();
				   foreach ($result as $row) {
				      echo "<tr>";
				      echo "<td>". $row ['orader_id'] ."</td>";
				      echo "<td>". $row ['frist_name'] ."</td>";
				      echo "<td>". $row ['last_name'] ."</td>";
				      echo "<td>". $row ['email'] ."</td>";
				      echo "<td>". $row ['phone_number'] ."</td>";
				      echo "<td>". $row ['gender'] ."</td>";
				      echo "<td>". $row ['date_of_birth'] ."</td>";
				      echo "<td>". $row ['present_address'] ."</td>";
				      echo "<td>". $row ['permanent_address'] ."</td>";
				      echo "<td><img style='width:80px; height:80px' src='uploads/". $row ['profile_photo'] ."'/></td>";
				      echo "<td>". $row ['current_date_of_time'] ."</td>";

				      echo "<td>". "<a href ='view_user.php ?orader_id=".$row['orader_id']."'><button class='button button5'>View</button></a>". "</td>" ;

				    if( $_SESSION['role_id'] == 1)
				    {
				      echo "<td>". "<a href ='update_user.php?orader_id=".$row['orader_id']."'><button class='button edit button5'>Edit</button></a>". "</td>" ;				      				      
				      echo "<td>". "<a href ='delete_user.php ?orader_id=".$row['orader_id']."'><button class='button delete button5'>Delete</button></a>". "</td>" ;				     	
				  } else {
				  	 echo "<td></td>" ;				      				      
				      echo "<td></td>" ;
				  }


				      echo "</tr>";
				     
				   }
				   echo "<a href='book_list.php'><button class='<button7 button6'>Black</button></a>";

				} catch (Exception $e) {
		    	echo "error".$e->getMessage();
		    	
		}

		?>

</body>
</html>
