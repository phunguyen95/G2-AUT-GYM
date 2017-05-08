<?php session_start();?>

<?php

    include_once 'conf/setting.php';
  $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }    

    if (isset($_POST['password_change'])) {

        $username = $_POST['username'];
        $password = $_POST['old_password'];
        $newpassword = ($_POST['new_password']);
        $confirmnewpassword =($_POST['con_newpassword']);

        // match username with the username in the database
        $sql = "SELECT * FROM membership WHERE username ='".$username."'";
$sql2 = "UPDATE membership SET password='".$newpassword."' WHERE username='".$username."'";
	$result=mysqli_query($conn,$sql);
	$number_of_rows=mysqli_num_rows($result);
	if($number_of_rows>0)
	{
				  
			if ($conn->query($sql2) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

	

	echo"<script>alert('Add succesfull');</script>";
	
	}
	else
	{

	
	}

}
     

?>