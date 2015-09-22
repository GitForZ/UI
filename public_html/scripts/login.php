<?php 

function __autoload($class_name) 
{
    include "class."."$class_name."."php";
}

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



if (!$statement) {
    echo "<p>Error in query.</p>"; 
}

if ($db_user === $username && $db_pass === $password) {
    ob_start(); // ensures anything dumped out will be caught

// do stuff here
$url = 'http://example.com/thankyou.php'; // this can be set based on whatever

// clear out the output buffer
while (ob_get_status()) 
{
    ob_end_clean();
}

    header('Location: ../budget.html');
} else {
    echo "<p>Authentication error.</p>"; 
}

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body>
</body>
</html>