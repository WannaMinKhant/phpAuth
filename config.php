<?php
	
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$db = "phpauth";
	$conn;

	$conn = new mysqli($host, $user, $pass,$db);
	if($conn->connect_error){
		return false;
	}else{
		return true;
	}
?>