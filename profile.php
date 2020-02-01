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
					<li><a href="home.php">Feed</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="find_friends.php">Find friends</a></li>
				</ul>
			
		</div>
	</nav>
	<center>
		<div class="row">
            <div class="col-sm-8">
		<div class="panel panel-success">
			<div class="panel-body"><h2>Profile</h2></div>
				<div class="panel-footer">
				<form action="update_info.php">
					<div class="form-group" style="width:40%;">
						<label for="username">Username</label>
						<input class="form-control" type="text" name="username" placeholder="<?php echo $_SESSION['username']; ?>">
						<label for="email">Email </label>
						<input class="form-control" type="email" placeholder="<?php echo  $_SESSION['email'];?>">
						<label for="email">Bio </label>
						<input class="form-control" type="text" placeholder="<?php echo $_SESSION['bio'];?>"><br>
						<input type="submit" value="Update" class="btn btn-success">

					</div>
				</form>	
                    <br>
                    <form method="POST" action="change_password.php">
                        <div class="form-group" style="width:40%;">
                          <label for="password">Current password</label>
                            <input type="password" class="form-control" name="oldpassword" placeholder="******">
                          <label for="password">New Password</label>
                            <input type="password" class="form-control" name="password" placeholder="******">
                          <label for="cpassword">Confirm New Password</label>
                            <input type="password" class="form-control" name="cpassword" placeholder="******"><br>
                            <input type="submit" value="Update password" class="btn btn-danger" name="submit">
                        </div>
                    </form>
				</div>
				</div>
            </div>
            <div class="col-sm-4">
            <div class="panel panel-success">
			<div class="panel-body"><h2>Friends</h2></div>
				<div class="panel-footer">
				    
				</div>
				</div>
            </div>

		</div>
		
		
	</center>
</body>
</html>
