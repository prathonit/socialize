<?php 
	$dbhost="localhost";
	$dbusername="prathonit";
	$dbpassword="pwdpwd";
	$dbname="main";
	$handle=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
	if (!mysqli_connect_error()){
		function validate($data){
			$data=htmlspecialchars($data);
			$data=stripslashes($data);
			$data=trim($data);
			return $data;
		}
		$username=validate($_POST['username']);
		$password=validate($_POST['password']);
		$cpassword=validate($_POST['cpassword']);
		$email=validate($_POST['email']);
		$bio=validate($_POST['bio']);

		$dataOk=1;
		if ($password!=$cpassword){
			$dataOk=0;
			die("Passwords don't match");
		}
		if ($dataOk!=0){
			$password=md5($password);
			$query="INSERT INTO `php` (`username`,`password`,`email`,`bio`) VALUES ('".$username."','".$password."','".$email."','".$bio."')";
			$query_profile_picture="INSERT INTO `profile_picture` (`username`) VALUES ('".$username."')";

			mysqli_query($handle,$query);
			mysqli_query($handle,$query_profile_picture);
			setcookie("username",$username,time()+(86500*30),"/");
			header("Location:index.php");

		}
	}
	else{
		die("There was a problem");
	}
