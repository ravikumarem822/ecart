<?php


	include 'conn.php';
	$name = $_POST['name'];
	$password = $_POST['password'];

	$query="SELECT password FROM `register` WHERE `name`='$name' AND `role`='admin'";
	
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_row($result);
   	$user=$row[0];
      echo $user;
      $a=password_verify($password, $user);
      echo $a;
   	if(password_verify($password, $user)){
   		$message="successfully Logged in";
   		header("location: products.php?message=$message");
         echo "success";

   	}
   else{
   	$message="Please Enter Correct Information";
   		header("location: admin.php?message=$message");
     
   } 
   	
   	
?>