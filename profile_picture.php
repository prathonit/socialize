<?php
    include ('config/declaration.php');
?>
<?php 
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
		Feed 
	</title>

</head>
<body>
	<?php include('assets/nav_profile.php'); ?>
	<center>
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default" style="width:60%;">
					<div class="panel-body">
						<img src="<?php echo $profile_picture_path; ?>" class="media-object" style="width:20%;">
					</div>
					<div class="panel-footer"<>
						<form action="profile_picture.php" method="POST" enctype="multipart/form-data">
					<div class="form-group" style="width:40%;">
						<label for="username">Username</label>
						<p class="form-control-static"><?php echo $_SESSION["username"]; ?></p>
						<label for="profile_picture">Select a new profile picture</label>
						<input type="file" class="form-control" name="profile_picture" id="profile_picture"><br>
						<input type="submit" value="Update" class="btn btn-success">
						<br><br>
							
					</div>
				</form>	
					</div>
				</div>
			</div>
			

		</div>		
		
	</center>
</body>
</html>
<?php 
	if ($_SERVER['REQUEST_METHOD']=="POST") {
        //check for request parameters

		$target_dir="../socialize_data/profile_picture/";
		$picture_name=$_SESSION['username'].basename($_FILES["profile_picture"]["name"]);
		$target_file=$target_dir.$picture_name;
		$uploadOk=1;
		$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		//check if file is actually an image 
		if (isset($_POST['submit'])){
			$check=getimagesize($_FILES['profile_picture']['tmp_name']);
			if ($check===false){
				$uploadOk=0;
			}
		}
		if ($_FILES['profile_picture']['size']>1*1000*1000){
			echo "File is too big. Please upload a file of size less than 1 MB.";
		}
		if ($uploadOk==1){
			move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file);
			$query_pic="UPDATE `php` SET `picture_path`='".$picture_name."' WHERE `username`='".$_SESSION['username']."'";
			mysqli_query($handle,$query_pic);
			header("Location:profile.php");
		}else{
			die("Bad request");
		}
	} else {
        die("Bad request");
    }
?>
