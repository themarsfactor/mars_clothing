<?php 


/**
 * function that register the user on the database
 * 
 * */

function registerUser($userId, $myUsername, $myEmail, $myPassword){

	$userId = getUserId($userId);
	$userId = strval($userId);


if (file_exists("__database/__connection.php")) {
	// code...
	require "database/connection.php";
}
else 
	if (file_exists("../__database/__connection.php")) {
	// code...
	require "../__database/__connection.php";

}


 $existResponse = userExist($myEmail, $userId);



 if ($existResponse == true) {
 	// code...
 	return "User already register";

 }else{
 	$registerQuery = "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES('$userId', '$myUsername', '$myEmail', '$myPassword')";
 	$registerQueryResult = mysqli_query($__conn, $registerQuery);

 	if ($registerQueryResult) {
 		// code...

 		return [
 			"message" => 'Registration successfully',
 			"code" => 'success',
 			"status" => 201



 		];
 	}else{

 		return [
 			"message" => 'Registration failed',
 			"code" => 'failed',
 			"status" => 404



 		];


 	}
 }






}



/**
 * 
 * function that generate user id randomly 
 * */

function getUserId($userId){

	$feedback = idExist($userId);

	if ($feedback == true) {
		// code...
		$userId = uniqid(rand()). uniqid();

		return $userId;
	}else{

		//check
		return $feedback;
	}

	

	


	
}








/**
 * function that check unique id (user's id) generated alaedy exist
 * 
 * */

function idExist($userId){
	if (file_exists("__database/__connection.php")) {
	// code...
	require "database/connection.php";
}
else 
	if (file_exists("../__database/__connection.php")) {
	// code...
	require "../__database/__connection.php";

}


$query_idExist = "SELECT * FROM `users` WHERE `id` = '$userId' LIMIT 1";
$query_Result = mysqli_query($__conn, $query_idExist);

if ($query_Result) {
	return true;
	// code...
}else{
	return false;
}




}







/**
 * Function that check the existence off users
 * 
 * */

function userExist($myEmail, $userId){
		if (file_exists("__database/__connection.php")) {
	// code...
	require "database/connection.php";
}
else 
	if (file_exists("../__database/__connection.php")) {
	// code...
	require "../__database/__connection.php";

}


$userExistQuery = "SELECT * FROM `users` WHERE email = '$myEmail' LIMIT 1";
$userExistQueryResult = mysqli_query($__conn, $userExistQuery);

	if ($userExistQueryResult) {
		if (mysqli_num_rows($userExistQueryResult) == 1) {

			//$rows = mysqli_fetch_array($userExistQueryResult, MYSQLI_ASSOC);
			// code...
		

		return true;
	}	// code...
	}else{

		return false;

	}


	}





	/**
	 * 
	 * functions that login user
	 * */


function loginUser($email, $password){

	if (file_exists("__database/__connection.php")) {
	// code...
	require "database/connection.php";
	}
	else if (file_exists("../__database/__connection.php")) {
	// code...
	require "../__database/__connection.php";
}


	$loginQuery = "SELECT * FROM `users` WHERE `email` = '$email' AND 
	`password` = '$password' LIMIT 1";

	$loginQueryResult = mysqli_query($__conn, $loginQuery);

	if ($loginQueryResult) {


		if (mysqli_num_rows($loginQueryResult) == 1) {
			// code...

			session_start();
			$_SESSION = mysqli_fetch_array($loginQueryResult, MYSQLI_ASSOC);
			header("location: ../users");


		}else{
			// no match in the database

			return [

					"message" => "Invalid password OR username...Have you registered?",
					"status" => 201


					];
		}
		// code...
	}else{
		//it does not run
		echo "it is not working";
	}

}


	





 