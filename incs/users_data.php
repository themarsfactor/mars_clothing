<?php
ini_set("display_errors", "on");

session_start();


if(!isset($_SESSION['email'])){
	header("location : login");
}

$email = $_SESSION['email'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];