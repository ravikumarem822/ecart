<?php


	include 'conn.php';
	$pendrive_id = $_POST['pendrive_id'];

	$query="DELETE FROM `pendrives` WHERE `pendrive_id`='$pendrive_id'";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "Successfully Deleted";
	}
	else{
		echo "Error";
	}
?>