<?php 
	include 'learn.php';
	$handle=D::_DB();
if (!$handle->connect_error){
	echo "Connected successfully";
}
else{
	echo "Connection failed";
}
	if(D::_DB_query("INSERT INTO php (username) VALUES ('PRA')")){
		echo "<br>Success";
	}
	else{
		echo "<br>Failed";
	}

?>