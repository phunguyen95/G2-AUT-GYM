
<?php  session_start();  // session starts with the help of this function 

	if(isset($_POST["username"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
	    $conn = mysqli_connect("localhost", "root", "", "gym");
	    // Check connection
	    if (!$conn) {
	        die("Connection failed: " . mysqli_connect_error());
	    }else{

	    	$sql = "select * from membership where username = '$username' and password = '$password'";
			$result = mysqli_query($conn, $sql);
		    if(mysqli_num_rows($result) > 0) {
				$kh = mysqli_fetch_row($result);
				$_SESSION["username"]=$kh[1];
				$_SESSION["mem_id"]=$kh[0];
				$_SESSION["lname"]=$kh[4];
				$_SESSION["contact"]=$kh[6];
				$_SESSION["role"]=$kh[7];
				$role = $_SESSION["role"];
				if($role == 1){
					echo "<script>alert('Hi Admin') </script>"; 
				}else{
				 	//refetch page 1
				    echo"<script>alert('Hi $kh[4]');</script>";
				}
				echo"<script>window.location='index.php';</script>";				
		    }else{
				echo"<script>alert('Wrong password');</script>";
				echo"<script>window.location='signin.php';</script>";
	 		}

	    }   
	}
?>