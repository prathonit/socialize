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
			</div>
			<div class="col-sm-4">
            <div class="panel panel-success">
			<div class="panel-body"><h2>POST</h2></div>
				<div class="panel-footer">
					<form method="POST" action="post.php">
				    	<div class="form-group">
				    		<label for="Post">Post</label>
				    		<textarea class="form-control" rows="7" name="post" id="post" placeholder="What's up?">
				    			
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
