<?php
	include 'config.php';	

	$email = $_POST['lemail'];
	$password = sha1($_POST['lpassword']); //enter password is encrypt 
	
	$sql = "SELECT * FROM auth WHERE username = '$email'"; // select input email from database
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row

	    while($row = $result->fetch_assoc()) {

	        echo "Name: " . $row["username"]. "<br> - Password: " . $row["password"]. "<br> Salt - " . $row["salt"]. "<br>"; // select all data from email address 

	        $existsalt = $row["salt"]; // get salt encrypt 
	        $checksalt = sha1($password.$existsalt); // encrypt password and salt are sum ,And then sum result are futher encrypt

	        $realpass = $row["password"]; // get exist encrypt password from db

	        if($checksalt == $realpass) // checked enter password and exist password
	        {
	        	echo "Successfully Login!";
	        } else {
	        	echo "Wrong Password.....!";
	        }
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
?>
