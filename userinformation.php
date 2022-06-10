<?php

	include ("database.php");

	$uid = $_POST['uid'];
	
	$query = "SELECT * FROM users WHERE uid='$uid'";

	$result = $connect->query($query);
	$number_of_rows = $result->num_rows;
	$temp = $result->fetch_assoc();
		
	header('Content-Type: application/json');
	echo json_encode($temp);
?>
