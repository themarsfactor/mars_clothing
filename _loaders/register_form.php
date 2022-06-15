<?php
ini_set("display_errors", "on");
require '../functions/functions.php';


if (isset($_POST['myUsername']) && isset($_POST['myEmail']) && isset($_POST['myPassword'])) {
	// code...

	$myUsername = $_POST['myUsername'];
	$myEmail = $_POST['myEmail'];
	$myPassword = $_POST['myPassword'];
	$userId = null;


	$feedback = registerUser($userId, $myUsername, $myEmail, $myPassword);

	echo json_encode($feedback);
}




?>