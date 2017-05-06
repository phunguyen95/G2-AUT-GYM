<?php
// Check for the username posted
// include Database connection file 
		 $link=mysqli_connect('localhost','root','','fitness');
if($link->connect_error)
	 {
	 	die('Error:('.$link->connect_error.')'.$link->connect_error);

	 }
	  else
	 {
	 	if(isset($_POST['action']) && $_POST['action'] == 'username_availability')
{ 
	$username= htmlentities($_POST['username']); // Get the username values

	
		$statement = $link->prepare("SELECT username FROM membership WHERE username=?");
    $statement->bind_param('s', $username);
    $statement->execute();
    $statement->bind_result($username);
if($statement->fetch()){
        die('Not available');
    }else{
        die('Available');
    }
		
	}
	mysqli_close($link);

}


?>