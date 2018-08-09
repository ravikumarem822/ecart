<?php

	include 'conn.php';
	$tv_name= $_POST['tv_name'];
	$query="SELECT * FROM `tvs` WHERE `tv_name`='$tv_name'";
	$result=mysqli_query($con,$query);
	$json_data=array();
	while($row=mysqli_fetch_assoc($result)){
		$json_data[]=$row;
	}
	
	echo json_encode($json_data);
?>