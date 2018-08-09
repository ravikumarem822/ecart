<?php


	include 'conn.php';
	$phone_id = $_POST['phone_id'];

	$query="DELETE FROM `phones` WHERE `phone_id`='$phone_id'";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "Successfully Deleted";
	}
	else{
		echo "Error";
	}
?>