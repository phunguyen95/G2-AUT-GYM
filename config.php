<?php
$host_name = "localhost";
$database = "gym"; 
$db_username = "root";      
$db_password = "";         

try {
$dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $db_username, $db_password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?>