<?php

if(!isset($_SESSION)) { session_start(); }

// Storing Session
$user_check=$_SESSION['login_user'];

$servername = "localhost";
$username = "root"; // For MYSQL the predifined username is root
$password = '';
$database = 'sports-db';

// Create connection
$conn = new mysqli($servername, $username ,$password, $database);

 
// Check connection

 if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

?>