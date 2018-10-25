<?php
//db.php
//create a connection to the territoria database in mySQL
	
	$server	= 	"127.0.0.1";
	$user	=	"root";
	$pass	=	"C1RT4Nmysql";
	$mydb	=	"territoria";
	
	$conn 	=	new mysqli($server, $user, $pass, $mydb);
	if($conn->connect_error){
		die("Connection failed: ". $conn->connect_error);
	}

?>