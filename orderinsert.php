<?php


	include 'conn.php';
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];

	$query="INSERT INTO `checkout`(`firstname`,`lastname`,`state`,`city`,`address`,`telephone`,`email`) VALUES ('$firstname','$lastname','$state','$city','$address','$telephone','$email')";
	$result=mysqli_query($con,$query);
	if ($result) {
		$message="Order placed";
		header("location: index.php");
		echo "success";
	}
	else{
		$message="Please Enter Correct Information";
		header("location: checkout1.php");
		echo "Error";
	}
?>