<?php

ini_set("display_errors", "on");

$host = "localhost";
$user = "root";
$db_password = "";
$db_name = "shadutree";

$__conn = mysqli_connect($host, $user, $db_password, $db_name) or die("could not connect");


if ($__conn){

	$query = "CREATE TABLE IF NOT EXISTS `users`(
		`id`VARCHAR (60) PRIMARY KEY NOT NULL,
		`username` VARCHAR(60) NOT NULL,
		`email` VARCHAR(60) NOT NULL,
		`password` VARCHAR (60) NOT NULL,
		`date_created` TIMESTAMP NOT NULL 


		)"; 

	$query_result = mysqli_query($__conn, $query);

	if ($query_result) {
		// code...
		
	}
}