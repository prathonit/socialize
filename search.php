<?php 
	session_start();
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
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand"><b>Socialize</b></a>
			</div>
			<ul class="nav navbar-nav">
					<li><a href="home.php">Feed</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li class="active"><a href="find_friends.php">Find friends</a></li>
				</ul>
			
		</div>
	</nav>
	<center>
		<br><br>
		<form method="POST" action="search.php">
			<div class="input-group" style="width:50%;">
				<input type="text" class="form-control" placeholder="Search">
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

        if ($result=$handle->query($query)){
        	echo "<center>";
        	while($row=$result->fetch_assoc()){
        		$url="userprofile.php?username=".$row['username'];
        		echo "<a href=$url>";
        		echo "<div class='panel panel-success'>";
        		echo "<div class='panel-body'>";
        		echo "<b>Username:</b>".$row['username'];
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
