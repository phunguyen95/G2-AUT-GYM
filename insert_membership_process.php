
<?php session_start();?>
<?php
        require_once ('conf/setting.php');
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }    

		$username = $password = $fname = $lname = $address = $contact = NULL;
		$repassword = NULL;

		if (isset($_POST['re-password'])) {
			$repassword = $_POST['re-password'];
		}

		if (isset($_POST['username'])) {
			$username = $_POST['username'];
		}

		if (isset($_POST['password'])) {
			$password = $_POST['password'];
		}

		if (isset($_POST['fname'])) {
			$fname = $_POST['fname'];
		}

		if (isset($_POST['lname'])) {
			$lname = $_POST['lname'];
		}

		if (isset($_POST['address'])) {
			$address = $_POST['address'];
		}

		if (isset($_POST['contact'])) {
			$contact = $_POST['contact'];
		}



		if($password == $repassword){
			if(is_null($username) || is_null($password) || is_null($fname) || is_null($lname) ||  is_null($address) || is_null($contact)){
			echo"<script>alert('Insert process is unsuccessfully');</script>";
				    header("location:addmembership.php"); 
			}else{
				
			    $sql = "INSERT INTO membership (username, password, fname, lname, address, contact)
					VALUES ('$username','$password','$fname','$lname','$address','$contact')";

				if (mysqli_query($conn, $sql)) {
				    echo"<script>alert('SUCCESSFULLY ADDED');</script>";
				    header("location:addmembership.php"); 
				} else {	
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				header("location:addmembership.php"); 
			}
		}else{
			header("location:addmembership.php");  
		}
		
		
	?>
	