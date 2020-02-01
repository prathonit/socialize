<?php 
	
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<title>
		Login 
	</title>

</head>
<body>
		<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"><b>Socialize</b></a>
			</div>
			<ul class="nav navbar-nav">
				
					<li class="active"><a href="index.php">Login</a></li>
					<li><a href="signup.php">Signup</a></li>
				</ul>
			
		</div>
	</nav>
	<center>
		<h1>Login </h1>
		<br>
		<form action="auth.php" method="POST">
			<div class="form-group" style="width:35%;">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control" placeholder="Xyz" required="">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control" placeholder="******" required=""><br>
			<input class="btn btn-success" type="submit" value="Login" id="submit" name="submit">
		</div>
		</form>
		<br>
		<p>Don't have an account? <a href="signup.php">Sign up.</a></p>
	</center>
</body>
</html>
