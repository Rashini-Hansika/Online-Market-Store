<?php
//IT20643454 Hansika A G D R
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "empayment_db";
	
	$con = new mysqli($servername,$username,$password,$dbname);
	
	if($con->connect_error){
		die("Connection Failed: ".$con->connect_error);
	}
?>