<?php


// echo( $serverName ."<br>");
// echo $username;
// echo $password;
// echo $dbName;

function dbConnect(){

	include "dbData.php";
	$conn = new mysqli($serverName, $username, $password , $dbName);


	if($conn -> connect_error){
		die("Connection Failed." . $conn->connect_error);
	}
	else{
	//echo "Successfully Connected to the database server.";
	}

	return $conn;
} 	


?>