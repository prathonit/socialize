
<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<title>
		Signup
	</title>

</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"><b>Socialize</b></a>
			</div>
			<ul class="nav navbar-nav">
				
					<li><a href="index.php">Login</a></li>
					<li class="active"><a href="signup.php">Signup</a></li>
				</ul>
			
		</div>
	</nav>
	<center>
		<h1>Signup</h1>
		<p>All fields are required.	</p>
		<br>
		<form action="signup_auth.php" method="POST">
			<div class="form-group" style="width:35%;">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control" placeholder="Xyz" required="">
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control" placeholder="xyz@example.com" required="">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control" placeholder="******" required="">
			<label for="cpassword">Confirm Password</label>
			<input type="password" name="cpassword" class="form-control" placeholder="******" required="">
			<label for="bio">Bio</label>
			<input type="text" name="bio" class="form-control" placeholder="Perhaps a little bit about yourself." required=""><br>

			<input class="btn btn-success" type="submit" value="Signup" id="submit" name="submit">
		</div>
		</form>
		<br>
		<p>Already have an account? <a href="index.php">Login.</a></p>
	</center>
</body>
</html>
