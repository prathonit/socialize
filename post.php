<?php 
	session_start();
	$dbhost="localhost";
	$dbusername="prathonit";
	$dbpassword="pwdpwd";
	$dbname="main";
	$handle=new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
	if ($handle->connect_error){
		die("There was error try after sometime");
	}else{
		function validate($data){
			$data=htmlspecialchars($data);
			$data=stripslashes($data);
			$data=trim($data);
			return $data;
		}
		date_default_timezone_set('Asia/Kolkata');
		$username=$_SESSION['username'];
		$post_content=validate($_POST['post']);
		$post_date=date('d/m/Y h:i:s:a');
		$query="INSERT INTO `posts` (`username`,`post_content`,`post_date`)  VALUES ('".$username."','".$post_content."','".$post_date."')";
		if ($result=$handle->query($query)){
			header("Location:home.php");
		}
		else{
			die("There was a problem try after sometime");
		}
	}
?>