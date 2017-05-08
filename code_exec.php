<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
	 $link=mysqli_connect('localhost','root','','gym');
if($link->connect_error)
	 {
	 	die('Error:('.$link->connect_error.')'.$link->connect_error);

	 }
	  else
	 {
	 	if(isset($_POST["fname"]))
	{
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$username=$_POST["username"];
	$password=$_POST["password"];
		$sql="INSERT INTO membership(username,password,fname,lname,contact) value(?,?,?,?,?)";
$queryResult = mysqli_query($link, $sql);

	$stmt=$link->prepare($sql);
		$stmt->bind_param("sssss",$username,$password,$fname,$lname,$email);
	$stmt->execute();

	

	echo"<script>alert('Add succesfull');</script>";
	echo "<h1>Your post have been stored successfully in our database </h1>";
	echo "</br>";
	echo "<a href='index.php'>Back to homepage </a>";
	}
}

		



?>