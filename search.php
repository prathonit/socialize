<?php
    include ('config/declaration.php');
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
	<?php include('assets/nav_find.php'); ?>
	<center>
		<br><br>
		<form method="POST" action="search.php">
			<div class="input-group" style="width:50%;">
				<input type="text" class="form-control" name="search" placeholder="Search">
				<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						</button>
				</div> 
			</div>
		</form>	<br><br>
		<!--Result-->
<div class="panel-group">
<?php 
	$dbhost="localhost";
    $dbusername="prathonit";
    $dbpassword="pwdpwd";
    $dbname="main";
    $handle=new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    if ($handle->connect_error){
    	die("There was an error please try again later");
    }else{
    	function validate($data){
            $data=htmlspecialchars($data);
            $data=stripslashes($data);
            $data=trim($data);
            return $data;
        }
        $search=validate($_POST['search']);
        if (strlen($search)<=2){
        	die("Please enter atleast three characters to search");
        }
        $query="SELECT * FROM `php` WHERE `username` LIKE '%".$search."%'";
        $profile_picture_path="../socialize_data/profile_picture/";
        if ($result=$handle->query($query)){
        	echo "<center>";
        	while($row=$result->fetch_assoc()){
                $profile_picture_file=$profile_picture_path.$row['picture_path'];
        		$url="userprofile.php?username=".$row['username'];
        		echo "<a href=$url>";
        		echo "<div class='panel panel-success'>";
        		echo "<div class='panel-body'>";
        		echo "<b>Username:</b>".$row['username'];
                echo "<img src='$profile_picture_file' class='media-object' style='width:8%;'><br>";
        		echo "</div>";
        		echo "<div class='panel-footer'>";
        		echo "<b>Email</b>"." ".$row["email"]." "."<b>Bio:</b>".$row["bio"];
        		echo "</div>";
        		echo "</div>";
        		echo "</a>";
        		echo "<br>";

        	}
        	
        }
    }
?>	
</div>
		
	</center>
</body>
</html>
