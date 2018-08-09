<?php


	include 'conn.php';
	$shoe_id = $_POST['shoe_id'];

	$query="DELETE FROM `shoes` WHERE `shoe_id`='$shoe_id'";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "Successfully Deleted";
	}
	else{
		echo "Error";
	}
?>