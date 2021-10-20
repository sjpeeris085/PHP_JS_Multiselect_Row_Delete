<?php 
  session_start();
?>


<?php
	include('dbh.php');

	if($data===false)
	{
		echo("connection error");
	}

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$uname=$_POST["username"];
		$pwd=$_POST["password"];

		$sql="SELECT * FROM users where username='$uname' AND pwd='$pwd'";
		$result=mysqli_query($data,$sql);
		$row=mysqli_fetch_array($result);


		if($row["type"]=="user")
		{
				$_SESSION["username"]=$row["name"];
				header("location:user.php");
		}

		elseif($row["type"]=="admin")
		{
			$_SESSION["username"]=$uname;
			header("location:dashboard.php");
		}

		else
		{
			$message="Your username or password is incorrect!!";
		}
	}
?>


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
	<title>Login Page</title>
	<link rel="stylesheet" href="design.css">
</head>

<body>
	<section class="box">

		<br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br>
		
		
		

		<div class="wrapper">
			<img src="Images/spda5.jpg">

			<hr>

			<h1>LOGIN FORM</h1>

			<hr>

			<br>

			<form action="#" method="POST">
				<div class="tex-danger">
					<?php
						if(isset($message))
						{
							echo $message;
						}
					?>
				</div>
				<p>
					<input type="text" name="username" placeholder="Username" autofocus="autofocus" required>
					<i class="bi bi-person"></i>
				</p>
				<p>
					<input type="password" name="password" id="password" placeholder="Password" required>
					<i class="bi bi-eye-slash" id="togglePassword"></i>
				</p>
				<input type="submit" value="Login">
			</form>

			<!-- <div class="bottom-text">
				<input type="checkbox" name="remember" id="remember">Remember me  | 
				<a href="fpwd.php">Forgot Password ?</a>
			</div> -->
		</div>

		<div id="overlay-area"></div>
		
	</section>
	<script>
		const togglePassword = document.querySelector('#togglePassword');
  		const password = document.querySelector('#password');

 		togglePassword.addEventListener('click', function (e) 
		{
    		// toggle the type attribute
    		const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
   	 		password.setAttribute('type', type);
    		// toggle the eye slash icon
    		this.classList.toggle('bi-eye');
		});
	</script>
</body>
</html>