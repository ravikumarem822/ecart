<?php


	include 'conn.php';
	$tv_brand = $_POST['tv_brand'];
	$tv_desc =$_POST['tv_desc'];
	$tv_price =$_POST['tv_price'];
	$tv_name =$_POST['tv_name'];
	$tv_img =$_POST['tv_img'];
	
	$query="INSERT INTO `tvs`(`tv_brand`,`tv_desc`,`tv_price`,`tv_name`,`tv_img`) VALUES ('$tv_brand','$tv_desc','$tv_price','$tv_name','$tv_img')";
	$result=mysqli_query($con,$query);
	if ($result) {
		header("location: tv.php");
		echo "success";
	}
	else{
		echo "Error";
	}
?>