<?php


	include("database.php");

	$uid = $_POST['uid'];

	$query = "SELECT * FROM orders WHERE uid='$uid'";
	
	$result = $connect->query($query);
	$number_of_rows = $result->num_rows;
	$temp_array = array();
	
	if($number_of_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$temp_array[] = $row;
		}
	}
		
	header('Content-Type: application/json');
	echo json_encode($temp_array);
?>
