
<?php session_start();?>
<?php
        require_once ('conf/setting.php');
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }    


		$fullname = $password = $class = $qualification = $speciality = $description =  $img =  $img2 = NULL;
		$repassword = NULL;

		if (isset($_POST['re-password'])) {
			$repassword = $_POST['re-password'];
		}

		if (isset($_POST['fullname'])) {
			$fullname = $_POST['fullname'];
		}

		if (isset($_POST['password'])) {
			$password = $_POST['password'];
		}

		if (isset($_POST['class'])) {
			$class = $_POST['class'];
		}

		if (isset($_POST['qualification'])) {
			$qualification = $_POST['qualification'];
		}

		if (isset($_POST['speciality'])) {
			$speciality = $_POST['speciality'];
		}

		if (isset($_POST['description'])) {
			$description = $_POST['description'];
		}

		//images
		$img = $_FILES["trainer-img"]["name"]; 
		$img2 = $_FILES["class-img"]["name"]; 

	
		if($password == $repassword){
			if(is_null($fullname) || is_null($password) || is_null($class) || is_null($qualification) ||  is_null($speciality) || is_null($description)){
			echo "Insert process is unsuccessfully. Please <a href='insert_trainer.php'>click here</a> to try again...";
			}else{
				
				if(!is_null($img)){
					$img = $_FILES["trainer-img"]["name"]; 
					$img = "images/trainer/".$img;
					$folder="/xampp/htdocs/gym/images/trainer/";
					move_uploaded_file($_FILES["trainer-img"]["tmp_name"], "$folder".$_FILES["trainer-img"]["name"]);
				}

				if(!is_null($img)){
					$img2 = $_FILES["class-img"]["name"]; 
					$img2 = "images/trainer/".$img;
					$folder="/xampp/htdocs/gym/images/trainer/";
					move_uploaded_file($_FILES["class-img"]["tmp_name"], "$folder".$_FILES["class-img"]["name"]);
				}

			    $sql = "INSERT INTO trainer (trainer_name, trainer_password, trainer_class, qualification, speciality, description, img, img2)
					VALUES ('$fullname','$password','$class','$qualification','$speciality','$description', '$img', '$img2')";

				if (mysqli_query($conn, $sql)) {
				    echo"<script>alert('SUCCESSFULLY ADDED');</script>";
				    header("location:addmembership.php"); 
				} else {	
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
		
				    header("location:addmembership.php"); 

			}
		}else{
			header("location:insert_trainer.php"); 
		}
		
		
	?>
	