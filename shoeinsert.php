<?php


	include 'conn.php';
	$shoe_brand = $_POST['shoe_brand'];
	$shoe_desc =$_POST['shoe_desc'];
	$shoe_price =$_POST['shoe_price'];
	$shoe_name =$_POST['shoe_name'];
	$shoe_img =$_POST['shoe_img'];
	
	$query="INSERT INTO `shoes`(`shoe_brand`,`shoe_desc`,`shoe_price`,`shoe_name`,`shoe_img`) VALUES ('$shoe_brand','$shoe_desc','$shoe_price','$shoe_name','$shoe_img')";
	$result=mysqli_query($con,$query);
	if ($result) {
		header("location: shoe.php");
		echo "success";
	}
	else{
		echo "Error";
	}
?>