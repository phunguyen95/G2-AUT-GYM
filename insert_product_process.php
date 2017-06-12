
<?php session_start();?>
<?php
        require_once ('conf/setting.php');
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
       


		$id = $name = $price = $colour = $description =  $img = NULL;

		//product code (NOT NULL)
		if (isset($_POST['id'])) {
			$id = $_POST['id'];
		}

		//name (NOT NULL)
		if (isset($_POST['name'])) {
			$name = $_POST['name'];
		}

		//price of product (NOT NULL)
		if (isset($_POST['price'])) {
			$price = $_POST['price'];
		}

		//colour of product (NOT NULL)
		if (isset($_POST['colour'])) {
			$colour = $_POST['colour'];
		}

		//description of product (NOT NULL)
		if (isset($_POST['description'])) {
			$description = $_POST['description'];
		}

		//image of product (NOT NULL)

		
		$img = $_FILES["fileToUpload"]["name"]; 
		$img = "images/products/".$img;

		if(is_null($id) || is_null($name) || is_null($price) || is_null($colour) || is_null($description) || is_null($img)){
			echo "Insert process is unsuccessfully. Please <a href='insert_product.php'>click here</a> to try again...";
		}else{
			//else starting add product into database

			$sql = "SELECT * FROM products WHERE id = '$id'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				echo"<script>alert('Unsuccessfully. <i>Hint: this product code may have already added before.');</script>";
				header("location:addproduct.php"); 
			} else {
				$folder="/xampp/htdocs/gym/images/products/";
				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$folder".$_FILES["fileToUpload"]["name"]);

			    $sql = "INSERT INTO products (id, name, price, colour, description, img)
					VALUES ('$id','$name','$price','$colour','$description', '$img')";

				if (mysqli_query($conn, $sql)) {
				    echo"<script>alert('SUCCESSFULLY ADDED');</script>";
				    
				} else {	
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				    header("location:addproduct.php"); 
				}
			}
			
			echo "<br><br><a href='index.php'>Return to Home Page</a>";
			echo "<br><a href='insert_product.php'>Insert another product</a>";

		}
	?>
