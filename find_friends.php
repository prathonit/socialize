<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">	<title>
		Find Friends
	</title>

</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand"><b>Socialize</b></a>
			</div>
			<ul class="nav navbar-nav">
					<li><a href="home.php">Feed</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li class="active"><a href="find_friends.php">Find friends</a></li>
				</ul>
			
		</div>
	</nav>
	<center>
		<br><br>
		<form method="POST" action="search.php">
			<div class="input-group" style="width:50%;">
				<input type="text" class="form-control" placeholder="Search" name="search">
				<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						</button>
				</div> 
			</div>
		</form>		
		
	</center>
</body>
</html>
