<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
	 $link=mysqli_connect('localhost','root','','fitness');
if($link->connect_error)
	 {
	 	die('Error:('.$link->connect_error.')'.$link->connect_error);

	 }
	  else
	 {
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$sql="INSERT INTO membership (fname, lname,contact, username, password) values(?,?,?,?,?)";
	$check="SELECT * from membership where username='$username'"; //check the unique of status code
$result=mysqli_query($link,$check);
$number_of_rows=mysqli_num_rows($result);
echo json_encode($number_of_rows);
}

		



?>