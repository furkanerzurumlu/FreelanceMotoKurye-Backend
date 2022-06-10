<?php
	$db_server="localhost";
	$db_user="biti_db";
	$db_pass="abc123!";
	$db_name ="biti_db";

	$connect = mysqli_connect($db_server,$db_user,$db_pass,$db_name); 
	$connect->set_charset("utf8");
	
	if(!$connect) {
		die("Database connect error". mysqli_connect_error());
	} 
?>	
