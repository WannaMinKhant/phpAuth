<?php
	include 'config.php';

	if($conn){
		//echo "connecct";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<style>
		body{
			margin:0;
			padding: 0;
		}
		.wrapper{
			margin:0 auto;
			width: 500px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="SignUp">
		<p>Sign Up</p>
		<form method="post" action="signup.php">
		<input type="email" name="email" class="email" placeholder="enter email"><br>
		 <input type="password" name="password" class="password" placeholder="enter password"><br>
		<button>Sign Up</button>
	</form>
	</div>

	<div class="login">
		<p>Login</p>
		<form method="post" action="login.php">
		<input type="email" name="lemail" class="email" placeholder="enter email"><br>
		 <input type="password" name="lpassword" class="password" placeholder="enter password"><br>
		<button>Login</button>
	</form>
	</div>
	</div>
</body>
</html>