
<?php session_start();?>
<?php
        require_once ('conf/setting.php');
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }    

		$title = $description = $img = $date = $author = NULL;
		

		if (isset($_POST['title'])) {
			$title = $_POST['title'];
		}

		if (isset($_POST['description'])) {
			$description = $_POST['description'];
		}

		if (isset($_POST['description'])) {
			$fname = $_POST['description'];
		}

		if (isset($_POST['date'])) {
			$date = $_POST['date'];
		}

		if (isset($_POST['author'])) {
			$author = $_POST['author'];
		}

		$img = $_FILES["file"]["name"]; 


		if(is_null($title) || is_null($description) || is_null($date) || is_null($author)){
			echo"<script>alert('Insert process is unsuccessfully');</script>";
			header("location:addblog.php"); 
		}else{

			if(!is_null($img)){
				$img = $_FILES["file"]["name"]; 
				$img = "images/blog/".$img;
				$folder="/xampp/htdocs/gym/images/blog/";
				move_uploaded_file($_FILES["file"]["tmp_name"], "$folder".$_FILES["file"]["name"]);
			}

			
		    $sql = "INSERT INTO blog (title, description, img, react, date, author, cmt_num)
				VALUES ('$title','$description','$img',0,'$date','$author',0)";

			if (mysqli_query($conn, $sql)) {
			    echo"<script>alert('SUCCESSFULLY ADDED');</script>";
				header("location:addblog.php"); 
			} else {	
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			
			header("location:addblog.php"); 

		}
		
?>
	