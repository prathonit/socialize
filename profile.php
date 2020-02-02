<?php 
	
	session_start();
	$dbhost="localhost";
    $dbusername="prathonit";
    $dbpassword="pwdpwd";
    $dbname="main";
    $handle=new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    if ($handle->connect_error){
    	die("There was an error try after sometime");
    }else{
    	$query="SELECT * FROM `php` WHERE `username`='".$_SESSION['username']."'   ";
    	if ($result=$handle->query($query)){
    			$row=mysqli_fetch_array($result);
    			$profile_picture_path="../socialize_data/profile_picture/".$row['picture_path'];
    	}
    	else{
    		die("There was an error try after sometime");
    	}
    }


?>
<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">	<title>
		Profile 
	</title>

</head>
<body>
	<?php 
		include('assets/nav_profile.php');
	?>
	<center>
		<div class="row">
            <div class="col-sm-8">
		<div class="panel panel-success">
			<div class="panel-body"><h2>Profile </h2>
				<img src="<?php echo $profile_picture_path; ?>" class="media-object" style="width:20%;"><br>
				<a style="color: white;" href="profile_picture.php"><button class="btn btn-success">Update Profile picture</button></a><br>

			</div>
								<div class="panel-footer">
				<form action="update_info.php" method="POST">
					<div class="form-group" style="width:40%;">

						<label for="username">Username</label>
						<p class="form-control-static"><?php echo $_SESSION["username"]; ?></p>
						<label for="email">Email </label>
						<input name="email" class="form-control" type="email" value="<?php echo  $_SESSION['email'];?>">
						<label for="email">Bio </label>
						<input name="bio" class="form-control" type="text" value="<?php echo $_SESSION['bio'];?>"><br>
						<input type="submit" value="Update" class="btn btn-success">
						<br><br>
						<p>Username can't be changed</p>

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
			<div class="panel-body"><h2>POST</h2></div>
				<div class="panel-footer">
					<form method="POST" action="post.php">
				    	<div class="form-group">
				    		<label for="Post">Post</label>
				    		<textarea class="form-control" rows="7" name="post" id="post" placeholder="What's up?">
				    			
				    		</textarea><br>
				    		<input type="submit" value="Post" class="btn btn-success">

				    	</div>
				    </form>
				</div>
				</div>
            </div>

		</div>
		
		
	</center>
</body>
</html>
