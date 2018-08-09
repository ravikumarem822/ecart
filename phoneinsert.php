<?php


	include 'conn.php';
	$phone_brand = $_POST['phone_brand'];
	$phone_desc =$_POST['phone_desc'];
	$phone_price =$_POST['phone_price'];
	$phone_name =$_POST['phone_name'];
	$phone_img =$_POST['phone_img'];
	
	$query="INSERT INTO `phones`(`phone_brand`,`phone_desc`,`phone_price`,`phone_name`,`phone_img`) VALUES ('$phone_brand','$phone_desc','$phone_price','$phone_name','$phone_img')";
	$result=mysqli_query($con,$query);
	if ($result) {
		header("location: phone.php");
		echo "success";
	}
	else{
		echo "Error";
	}
?>