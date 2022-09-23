<?php
//IT20639976 Hansika A G D R
	require 'config.php';
	
	$crdType = $_POST["cType"];
	$crdNumber = $_POST["cardNum"];
	$country = $_POST["cont"];
	$city = $_POST["city"];
	$pCode = $_POST["poscode"];
	$conNumber = $_POST["contact"];
	$Email = $_POST["mail"];
	
	$sql = "INSERT INTO Payment(Type,CardNumber,Country,City,PostalCode,ConNumber,Email)VALUES('$crdType',$crdNumber,'$country','$city','$pCode',$conNumber,'$Email')";
	
	if($con->query($sql)){
		echo "Details Inserted Successfully";
	}
	else
	{
		echo "Error :".$con->error;
	}
	$con->close();
?>