<?php 
	session_start();
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
	<?php include('assets/nav_home.php'); ?>
	<center>
	<div class="row">
		<div class="col-sm-8">
	<?php 
	$dbhost="localhost";
    $dbusername="prathonit";
    $dbpassword="pwdpwd";
    $dbname="main";
    $handle=new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    $query_friend_list="SELECT * FROM `relationship` WHERE `user_1`='".$_SESSION['username']."'  ";
    $result_friend_list=$handle->query($query_friend_list);
    while($row_friend_list=$result_friend_list->fetch_assoc()){
    	$friend_name=$row_friend_list['user_2'];
    	$query_post="SELECT * FROM `posts` WHERE `username`='".$friend_name."' ORDER BY `post_date` DESC";
    	$result_post=$handle->query($query_post);
    	while($row_post=$result_post->fetch_assoc()){
    		$username=$row_post['username'];
    		$post_id=$row_post['post_id'];
    		$post_content=$row_post['post_content'];
    		$post_date=$row_post['post_date'];
    		$username_url="userprofile.php?username=".$username;
    		echo "<div class='panel panel-success'>";
    		echo "<div class='panel-body'>";
    		echo "<h4><b>Username: </b><a href='$username_url'>$username</a><br><b>Date: </b>$post_date</h4>";
    		echo "</div>";
    		echo "<div class='panel-footer'>";
    		echo "$post_content";
    		echo "</div>";
    		echo "</div>";

    	}

    }
?>
</div>
		
			
			<div class="col-sm-4">
            <div class="panel panel-success">
			<div class="panel-body"><h2>POST</h2></div>
				<div class="panel-footer">
					<form method="POST" action="post.php">
				    	<div class="form-group">
				    		<label for="Post">Post</label>
				    		<textarea class="form-control" rows="7" name="post" id="post" placeholder="What's up?" >
				    			
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
<?php 
	
	if (!isset($_SESSION['username'])){
		header("Location:index.php");
	}
?>
