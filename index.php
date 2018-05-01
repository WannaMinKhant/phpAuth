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
		p{
			padding-top:20px;
			text-align: center;
			color:#fff;
			font-size: 1.3em;
		}
		.wrapper{
			margin:0 auto;
			width: 500px;
		}
		.SignUp, .login{
			margin:0 auto;
			display: block;
			width: 60%;
			height: 220px;
			background: #0F0;
			border-radius: 20px;

		}
		button{
			margin:10px auto;
			display: block;
		}
		input{
			margin:5px auto;
			display: block;
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
	<!-- <script>
		alert("Hello");
		x = document.getElementsByClassName("login")
	</script> -->
</body>
</html>