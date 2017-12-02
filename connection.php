<?php
	$dbCon = mysqli_connect("localhost", "root", "");
	mysqli_select_db($dbCon,"login");
	
	if(mysqli_connect_errno()){
		echo "failed to connect: ", mysqli_connect_errno();
	}else{
		echo "connected successfully";
	}
?>