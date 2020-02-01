<?php 
	$dbhost="localhost";
    $dbusername="prathonit";
    $dbpassword="pwdpwd";
    $dbname="main";
    $handle=new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
        if ($handle->connect_error){
    	die("There was an error please try again later.");
    }else{
    	function validate($data){
    	$data=htmlspecialchars($data);
    	$data=stripslashes($data);
    	$data=trim($data);
    	return $data;
    	    }

    	session_start();
    	$username=validate($_POST['username']);
    	$email=validate($_POST['email']);
    	$bio=validate($_POST['bio']);
    	$queryi="UPDATE `php` SET `email`='".$email."',`bio`='".$bio."' WHERE `username`='".$_SESSION['username']."'";
    	if ($handle->query($queryi)===TRUE){
    		$_SESSION["bio"]=$bio;
    		$_SESSION["email"]=$email;
    		header("Location:profile.php");
    	}else{
    		die("There was an error changing the info. Maybe the user with the new username already exist.");
    	}
    }


?>