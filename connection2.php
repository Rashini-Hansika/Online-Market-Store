<?php
//IT20643454 Jayangani W H
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="phptutorial01";
	
	$con= new mysqli($servername,$username,$password,$dbname);
	
	if(!$con){
		echo 'Please Check Ypur Database connection';
	}
	
?>	