<?php

	include 'conn.php';
	$pendrive_name= $_POST['pendrive_name'];
	$query="SELECT * FROM `pendrives` WHERE `pendrive_name`='$pendrive_name'";
	$result=mysqli_query($con,$query);
	$json_data=array();
	while($row=mysqli_fetch_assoc($result)){
		$json_data[]=$row;
	}
	
	echo json_encode($json_data);
?>