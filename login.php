<?php
	include 'config.php';	

	$email = $_POST['lemail'];
	$password = sha1($_POST['lpassword']);
	
	$sql = "SELECT * FROM auth WHERE username = '$email'";
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row

	    while($row = $result->fetch_assoc()) {
	        echo "Name: " . $row["username"]. "<br> - Password: " . $row["password"]. "<br> Salt - " . $row["salt"]. "<br>";

	        $existsalt = $row["salt"];
	        $checksalt = sha1($password.$existsalt);
	        $realpass = $row["password"];

	        if($checksalt == $realpass)
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
