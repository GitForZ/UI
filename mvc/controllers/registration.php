<?php 

include '../models/SQLConnection.class.php';

$sqlConn = new SQLConnection(); 
$sqlConn->connection(); 
$link = $sqlConn->link; 

$firstname = $_POST["firstname"]; 
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$month = $_POST["month"];
$day = $_POST["day"];
$year = $_POST["year"];
$date = $month . '-' . $day . '-' . $year; 

try {
	if ($month <1 || $month > 12) {
		echo "Wrong date format."; 
		exit(0); 
	}
	if ($day <1 || $day > 31) {
		echo "Wrong date format."; 
		exit(0); 
	}
	if ($year <1865 || $year > 2015) {
		echo "Wrong date format."; 
		exit(0); 
	}
	$statement = $link->prepare("INSERT INTO users(firstname,lastname,username,password,email,dob)
		VALUES(?,?,?,?,?,?)");
	$statement->execute(array($firstname,$lastname,$username,$password,$email,$date));
	echo "Registration successful."; 
} catch (PDOException $e) {
	echo "Sorry, username or email has already been taken.";
}


?> 