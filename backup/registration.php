<?php 

include 'connect.php';

$sqlConn = new SQLConnection(); 
$sqlConn->connection(); 
$link = $sqlConn->link; 

$firstname = $_POST["firstname"]; 
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$date = $_POST["date"];

$statement = $link->prepare("INSERT INTO test(firstname,lastname,username,password,email,dob)
	VALUES(?,?,?,?,?,?)");

$statement->execute(array($firstname,$lastname,$username,$password,$email,$date));

if ($statement) {
	echo "<p>Successfully added $firstname to database.</p>"; 
} else {
	echo "<p>Error adding $firstname to database.</p>"; 
}
?> 