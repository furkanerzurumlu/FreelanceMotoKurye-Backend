<?php

	include("database.php");
	
	$uid = $_POST['uid'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$phone = $_POST['phone'];
	$usertype = $_POST['usertype'];

	
	$add = "INSERT INTO users(uid,email,username,phone,usertype) VALUES ('$uid','$email','$username','$phone','$usertype')";
	
	if($connect->query($add) == true) { 
		$temp = array();
		$temp['status'] = 1;
		echo json_encode($temp);
	} else {
		$temp = array();
		$temp['status'] = 0;
		echo json_encode($temp);
	}

?>
