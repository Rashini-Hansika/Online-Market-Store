<?php
//IT20622596 - Weerasinghe R B	

	$full_name = $_POST['full_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$mobile= $_POST['mobile'];
	$email= $_POST['email'];
	$address= $_POST['address'];
	$country= $_POST['country'];
	$day= $_POST['day'];
	 //Database connection 
	 
	$conn = new mysqli('localhost','root','','test');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{
		 
		$stmt = $conn->prepare("INSERT INTO `profile` (full_name,username,password,mobile,email,address,country,day) VALUES (?,?,?,?,?,?,?,?)"); //check the db column names
	
	//repeat structure
		$stmt->bind_param("ssssssss",$full_name,$username,$password,$mobile,$email,$address,$country,$day);
		if(!$stmt->execute()){
			die($conn->error);
		} else {
			echo"your profile page...";
		}
	//---------
		
		$stmt->close();
		$conn->close();
		
	 }
	 ?>