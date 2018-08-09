<?php


	include 'conn.php';
	$tv_id = $_POST['tv_id'];

	$query="DELETE FROM `tvs` WHERE `tv_id`='$tv_id'";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "Successfully Deleted";
	}
	else{
		echo "Error";
	}
?>