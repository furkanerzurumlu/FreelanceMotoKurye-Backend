<?php

	include("database.php");
	
	$id = $_POST['id'];
	$uid = $_POST['uid'];
	
	$update = "UPDATE orders SET status='$uid' WHERE id='$id'";
	
	if($connect->query($update) == true) { 
		$temp = array();
		$temp['status'] = 1;
		echo json_encode($temp);
	} else {
		$temp = array();
		$temp['status'] = 0;
		echo json_encode($temp);
	}

?>
