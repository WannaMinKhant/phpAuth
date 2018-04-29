<?php
	include 'config.php';	

	$email = $_POST['email'];
	$password = sha1($_POST['password']); //password has been encrypt by sha1 methods.
	$salt = sha1(rand(1,1000)); //Create random variable between (1 to 1000).Random variable has been encrpyt by sha1 methods.

	$pass = sha1($password.$salt); // encrypt sum of two encrypt variable that store in db.
	echo $email.'<br>'; // print username
	echo $salt.'<br>';	// print encrpyt random variable
	echo $pass.'<br>';	//print store password


	$sql = "insert into auth (username,password,salt) values ('$email','$pass','$salt')"; // sql command for insert into db.


	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>
