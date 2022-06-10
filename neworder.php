<?php

	include("database.php");
	
	$uid = $_POST['uid'];
	$lati = $_POST['lati'];
	$longi = $_POST['longi'];
	$recipientname = $_POST['recipientname'];
	$address = $_POST['address'];
	$packettype = $_POST['packettype'];
	$price = $_POST['price'];
	$status = 0;
	
	$add = "INSERT INTO orders(uid,lati,longi,recipientname,address,packettype,price,status) VALUES ('$uid','$lati','$longi','$recipientname','$address','$packettype','$price','$status')";

	if($connect->query($add) == true) { 
		$temp = array();
		$temp['status'] = 1;
		echo json_encode($temp);
	} else {
		$temp = array();
        // İşlemin başarısız olduğu durum
		$temp['status'] = 0;
		echo json_encode($temp);
	}

?>
