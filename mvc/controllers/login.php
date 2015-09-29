<?php 

include '../models/SQLConnection.class.php';
include '../views/BudgetView.class.php';

session_start(); 

$sqlConn = new SQLConnection(); 
$sqlConn->connection(); 
$link = $sqlConn->link; 

$username = $_POST["username"];
$password = $_POST["password"];



$statement = $link->prepare("SELECT username,password FROM users where username = :usr");
$statement->bindParam(':usr',$username);
$statement->execute();

$result= $statement->fetchAll();

$db_user = $result[0][0];
$db_pass = $result[0][1]; 


if ($db_user === $username && $db_pass === $password) {
	$_SESSION["sessionUser"] = $username;
     BudgetView::show(); 
    exit(); 
} else {
    echo "<p>Authentication error.</p>"; 
}

?>
