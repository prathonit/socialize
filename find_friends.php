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
	<?php 
		include('assets/nav_find.php');
	?>
	<center>
		<br><br>
		<form method="POST" action="search.php">
			<div class="input-group" style="width:50%;">
				<input type="text" class="form-control" placeholder="Search" name="search">
				<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						</button>
				</div> 
			</div>
		</form>		
		
	</center>
</body>
</html>
