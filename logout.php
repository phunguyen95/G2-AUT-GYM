<?php
//continue current session
session_start();
//check to see if session variable (uname) is set
//if set destroy the session
if(!empty($_SESSION['lname'])){
    session_destroy();
}

session_unset();	//unset all session variables 
session_destroy(); 	//destroy all data associated with the session 
//redirect the user to the home page
header("Location: index.php");
?>
