<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">	<title>
		Login 
	</title>

</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand"><b>Socialize</b></a>
			</div>
			<ul class="nav navbar-nav">
					<li><a href="#">Feed</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="#">Find friends</a></li>
				</ul>
			
		</div>
	</nav>
	<center>
		<h1> <?php echo $_SESSION["username"]; ?></h1>
		
		
	</center>
</body>
</html>
