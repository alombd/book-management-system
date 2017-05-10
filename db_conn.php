<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'ebook';

	try {
		$conn = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	} catch (Exception $e) {
		echo "connection faily";
		
	}

 ?>