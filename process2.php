<?php
//IT20643454 - Jayangani W H
	require 'connection2.php';
	
	if(isset($_POST['btn-login']))
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	
	if(empty($username)|| empty($password))
		{
			echo 'Please Fill in the Blanks';
		}
		else{
	
    $query="select * from users where FName='$username' or Email='$username'";
	$result=mysqli_query($con,$query);
			
			if($row=mysqli_fetch_assoc($result))
			{
				$db_password=$row['Password'];
				
				if(md5($password)==$db_Password)
				{
					header("location:admin.php");
				}
			else{
				echo 'Incorrect Password';
			}	
	
			}
			else{
				echo 'Login Succesfully';
			}
		}
?>