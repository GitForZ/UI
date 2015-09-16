<?php 

include 'connect.php';

$sqlConn = new SQLConnection(); 
$sqlConn->connection(); 
$link = $sqlConn->link; 

$username = $_POST["username"];
$password = $_POST["password"];

echo "<p> Your username was $username"; 


$statement = $link->prepare("SELECT username,password FROM test where password = :pass");
$statement->bindParam(':pass',$password);
$statement->execute();

$result= $statement->fetchAll();

$db_user = $result[0][0];
$db_pass = $result[0][1]; 



if ($statement) {
	echo "<p>Successful query.</p>"; 
} else {
	echo "<p>Error in query.</p>"; 
}

if ($db_user === $username && $db_pass === $password) {
	echo "<p>Successful authentication.</p>"; 
} else {
	echo "<p>Authentication error.</p>"; 
}

?> 