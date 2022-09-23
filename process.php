<?php
	require 'connection.php';
	

	
		$firstname=$_POST["firstname"];
		$lastname=$_POST["lastname"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$cpass=$_POST["cpass"];
		
		/*if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($cpass))
		{
			echo 'Please Fill in the blanks';
		}
		if($password!=$cpass)
		{

			echo 'Password Not Matched';
		}			
		else
		{
			$Pass=md5($password);*/
			$sql= "INSERT INTO users(FName,LName,Email,Password) VALUES('$firstname','$lastname','$email','$password')";
			if($con->query($sql)){
				echo "Your Record Has Been Saved in the Database";
			}
			else{
				echo "Please Check Your Query: ".$con->error;
			}
			$con->close();
	




	
?>