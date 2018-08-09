<?php


	include 'conn.php';
	$pendrive_brand = $_POST['pendrive_brand'];
	$pendrive_desc =$_POST['pendrive_desc'];
	$pendrive_price =$_POST['pendrive_price'];
	$pendrive_name =$_POST['pendrive_name'];
	$pendrive_img =$_POST['pendrive_img'];
	
	$query="INSERT INTO `pendrives`(`pendrive_brand`,`pendrive_desc`,`pendrive_price`,`pendrive_name`,`pendrive_img`) VALUES ('$pendrive_brand','$pendrive_desc','$pendrive_price','$pendrive_name','$pendrive_img')";
	$result=mysqli_query($con,$query);
	if ($result) {
		header("location: pendrive.php");
		echo "success";
	}
	else{
		echo "Error";
	}
?>