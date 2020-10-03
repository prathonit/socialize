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
		$password=md5($password);
		//settings limit as 1 to make sure only one user is selected at max
		$query="SELECT * FROM `php` WHERE `username`='".$username."' LIMIT 1";
		if ($result=mysqli_query($handle,$query)){
			if ($result->length() !== 1) {
				die('User does not exist');
			}
			$row=mysqli_fetch_array($result);
			if ($row['password']==$password){
				session_start();
				$_SESSION["username"]=$row["username"];
				$_SESSION["email"]=$row["email"];
				$_SESSION["bio"]=$row["bio"];
				header('Location:home.php');
			}else{
				die("Password was incorrect");
			}

		}else{
			die("User does not exist.");
		}
	}

?>
