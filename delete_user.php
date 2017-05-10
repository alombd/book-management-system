<?php
	
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'ebook';
	$orader_id = $_GET['orader_id'];
	try {
		$conn = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = "DELETE FROM orader_users_information WHERE orader_id = $orader_id";
		$conn->exec($query);
		echo "<script>
	                   alert('Record deleted successfullyy !!!!!');
	                   window.location = '/ebooks-Update-all/user_list.php';
	             </script>"; 


	} catch (Exception $e) {
		echo "error".$e->getMessage();
	}
?>