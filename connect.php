<?php 

$dbhost = "localhost";
$dbname = "Quota";
$dbusername = "uiteam";
$dbpassword = "uiteam4393";

$link = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?> 