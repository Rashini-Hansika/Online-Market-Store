<?php
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="phptutorial01";

	$con= new mysqli($servername,$username,$password,$dbname);

	if($con->connect_error){
		die("Connection Failed:".$con->connect_error);
	}


?>	