<?php
    include ('config/declaration.php');
?>
<?php
    $user_1=$_SESSION['username'];
    $user_2=$_GET['username'];
    $request=$_GET['request'];
    

    function addFriend($user_1,$user_2){
    $url="userprofile.php?username=".$_GET['username'];
    $dbhost="localhost";
    $dbusername="prathonit";
    $dbpassword="pwdpwd";
    $dbname="main";
    	$handle=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
    	$query="INSERT INTO `relationship` (`user_1`,`user_2`,`rel`) VALUES ('".$user_1."','".$user_2."','1')";
    	mysqli_query($handle,$query);
    	header("Location:$url");
    }	
    function removeFriend($user_1,$user_2){
    $url="userprofile.php?username=".$_GET['username'];
    $dbhost="localhost";
    $dbusername="prathonit";
    $dbpassword="pwdpwd";
    $dbname="main";
    	$handle=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
    	$query="DELETE FROM  `relationship`  WHERE `user_1`='".$user_1."' AND `user_2`='".$user_2."'  ";
    	mysqli_query($handle,$query);
    	header("Location:$url");
    }
    //changing friendship status
    if ($request==='add'){
    	addFriend($user_1,$user_2);
    }
    else if($request==='remove'){
    	removeFriend($user_1,$user_2);
    }
?>