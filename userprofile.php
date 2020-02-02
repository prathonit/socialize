<?php 
	
	session_start();
	$dbhost="localhost";
    $dbusername="prathonit";
    $dbpassword="pwdpwd";
    $dbname="main";
    $handle=new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    if ($handle->connect_error){
    	die("There was an error please try again later");
    }else{
        $query="SELECT * FROM `php` WHERE `username`='".$_GET['username']."'";

        if ($result=$handle->query($query)){
        	$row=mysqli_fetch_array($result);
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
			include('assets/nav_find.php');
		?>
		<center>
		<div class="row">
            <div class="col-sm-12">
		<div class="panel panel-success">
			<div class="panel-body"><h2>Profile </h2><br>
				<img src="../socialize_data/profile_picture/<?php echo $row['picture_path']; ?>" class="media-object" style="width:8%;">
			</div>
				<div class="panel-footer">
				<form>
					<div class="form-group" style="width:40%;">
						<label for="username">Username</label>
						<input name="text" class="form-control" type="text" value="<?php echo $row['username']; ?>">
						<label for="email">Email </label>
						<input name="email" class="form-control" type="email" value="<?php echo $row['email']; ?>">
						<label for="email">Bio </label>
						<input name="bio" class="form-control" type="text" value="<?php echo $row['bio']; ?>"><br>
					</div>
				</form>	
				</div>
				</div>
            </div>
		</div>
		
		
	</center>
</body>
</html>
