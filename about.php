
<?php session_start();?>

<!DOCTYPE HTML>
<html>
<head>
<title>Gym Website Template</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<!-- //grid-slider -->
<!---calender-style---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<!---//calender-style---->				  
</head>
<body>

<!-- start header_bottom -->
<?php require "social-media-row.php"; ?>
<!-- end header_bottom -->

<!-- start menu -->
<div class="menu" id="menu">
  <div class="container">
	<div class="logo">
		<a href="index.php"><img src="images/logo.png" alt=""/></a>
	</div>
	<div class="h_menu4"><!-- start h_menu4 -->
	    <a class="toggleMenu" href="#">Menu</a>
		<ul class="nav">
		    <li><a href="index.php">Home</a></li>
		    <li class="active"><a href="about.php">About</a></li>
		    <li><a href="trainers.php">Trainers</a></li>
		    <li><a href="classes.php">Classes</a></li>
		    <li><a href="blog.php">Blog</a></li>
		    <li><a href="pricing.php">Pricing</a></li>
		    <li><a href="product.php">Shop</a></li>
		    <li><a href="contact.php">Contact</a></li>
		    <?php
                if(isset($_SESSION["lname"])){
                    echo '<li><a href="#">Hi '.$_SESSION["lname"].'</a>
                             <ul>
                                <li><a href="profile.php">View Profile</a></li>
                                <li><a href="change_password.php">Change password</a></li>
                                <li><a href="logout.php">Log-out</a></li>
                             </ul>
                          </li>';
                }else{
                    echo ' <li><a href="signin.php">Sign In</a></li>';
                }
            ?>
		</ul>
		<script type="text/javascript" src="js/nav.js"></script>
	  </div><!-- end h_menu4 -->

	 <div class="clear"></div>
  </div>
</div>
<!-- end menu -->


<div class="main">
   <div class="about_banner_img"><img src="images/about.jpg" class="img-responsive" alt=""/></div>
	 <div class="about_banner_wrap">
  	    <h1 class="m_11">About Us</h1>
  	 </div>
  	 
  	 <div class="about-wrapper">
  	    <div class="container">
	       <div class="row about-top">
			 <div class="col-md-5">
			  <img src="images/about-img1.jpg" class="img-responsive" alt=""/> 
		     </div>
			 <div class="col-md-7 about-left-text">
			   <h2>Join us now!</h2>
			   <p>Our experienced personal trainers and qualified experts<br> are ready to help you achieve your goals</p>
			 </div>
             <div class="clear"></div>	
           </div>
	    </div>
      </div>

    <div class="container">
       <div class="about_trainer">
	      <h3 class="m_2">Our Trainers</h3>
		     
    <!--PHP code -->  
    <?php
		require_once ('conf/setting.php');
	    $conn = mysqli_connect($servername, $username, $password, $dbname);
	    // Check connection
	    if (!$conn) {
	        die("Connection failed: " . mysqli_connect_error());
	    }    

      	$sql = "SELECT * FROM trainer";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)) {

        	switch ($row['trainer_id']){
        		case 1: 
        			?>
        			<div class="row about_box">
        			<div class="col-md-4">
					  	<div class="box1">
						  	<div class="box1_left">
						  		<?php echo '<img src="'.$row["img"].'" class="img-responsive" alt=""/>';?>	  			  		
							  	<div class="desc1">
									<h3><?php echo $row["trainer_name"]; ?><br><span class="m_text"><?php echo $row["trainer_class"]; ?></span></h3>
									<p>"<?php echo $row["description"]; ?>"</p>
									<div class="coursel_list">
										<i class="a_heart"> </i>
										<i class="like1"> </i>
									</div>
									<div class="coursel_list1">
										<i class="a_twt"> </i>
										<i class="a_fb"> </i>
									</div>
									<div class="clear"></div>
							 	</div>
							</div>
							<div class="box1_right">
								<h4>Qualifications</h4>
								<p><?php echo $row["qualification"]; ?></p>
								<h4>Speciality</h4>
								<p class="para1"><?php echo $row["speciality"]; ?></p>
						    </div>
					    	<div class="clear"></div>
					 	</div>
					</div>
        			<?php
        			break;
        		case 2: 
        			?>
        			<div class="col-md-4">
					    <div class="box2">
					  		<div class="box1_left">
							  	<?php echo '<img src="'.$row["img"].'" class="img-responsive" alt=""/>';?>	  				  		
						  		<div class="desc2">
								<h3><?php echo $row["trainer_name"]; ?><br><span class="m_text"><?php echo $row["trainer_class"]; ?></span></h3>
								<p>"<?php echo $row["description"]; ?>"</p>
								<div class="coursel_list">
									<i class="heart1"> </i>
									<i class="like"> </i>
								</div>
								<div class="coursel_list1">
									<i class="twt"> </i>
									<i class="fb"> </i>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="box1_right">
							<h4 class="right_text">Qualifications</h4>
							<p class="right_text1"><?php echo $row["qualification"]; ?></p>
							<h4 class="right_text">Speciality</h4>
							<p class="right_text2"><?php echo $row["speciality"]; ?></p>	
					    </div>
					   <div class="clear"></div>
					  </div>
					</div>
        			<?php
        			break;
        		case 3: 
        			?>
        			<div class="col-md-4">
					  	<div class="box1">
						  	<div class="box1_left">
						  		<?php echo '<img src="'.$row["img"].'" class="img-responsive" alt=""/>';?>	  			  		
							  	<div class="desc1">
									<h3><?php echo $row["trainer_name"]; ?><br><span class="m_text"><?php echo $row["trainer_class"]; ?></span></h3>
									<p>"<?php echo $row["description"]; ?>"</p>
									<div class="coursel_list">
										<i class="a_heart"> </i>
										<i class="like1"> </i>
									</div>
									<div class="coursel_list1">
										<i class="a_twt"> </i>
										<i class="a_fb"> </i>
									</div>
									<div class="clear"></div>
							 	</div>
							</div>
							<div class="box1_right">
								<h4>Qualifications</h4>
								<p><?php echo $row["qualification"]; ?></p>
								<h4>Speciality</h4>
								<p class="para1"><?php echo $row["speciality"]; ?></p>
						    </div>
					    	<div class="clear"></div>
					 	</div>
					</div>
					<div class="clear"></div>
	    			</div>
        			<?php
        			break;
        		case 4:
        			?>
        			<div class="row about_box1">
	        			<div class="col-md-4">
						    <div class="box2">
						  		<div class="box1_left">
								  	<?php echo '<img src="'.$row["img"].'" class="img-responsive" alt=""/>';?>	  				  		
							  		<div class="desc2">
									<h3><?php echo $row["trainer_name"]; ?><br><span class="m_text"><?php echo $row["trainer_class"]; ?></span></h3>
									<p>"<?php echo $row["description"]; ?>"</p>
									<div class="coursel_list">
										<i class="heart1"> </i>
										<i class="like"> </i>
									</div>
									<div class="coursel_list1">
										<i class="twt"> </i>
										<i class="fb"> </i>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="box1_right">
								<h4 class="right_text">Qualifications</h4>
								<p class="right_text1"><?php echo $row["qualification"]; ?></p>
								<h4 class="right_text">Speciality</h4>
								<p class="right_text2"><?php echo $row["speciality"]; ?></p>	
						    </div>
						   <div class="clear"></div>
						  </div>
						</div>
        			<?php
        			break;
        		case 5:
        			?>
        			<div class="col-md-4">
					  	<div class="box1">
						  	<div class="box1_left">
						  		<?php echo '<img src="'.$row["img"].'" class="img-responsive" alt=""/>';?>	  			  		
							  	<div class="desc1">
									<h3><?php echo $row["trainer_name"]; ?><br><span class="m_text"><?php echo $row["trainer_class"]; ?></span></h3>
									<p>"<?php echo $row["description"]; ?>"</p>
									<div class="coursel_list">
										<i class="a_heart"> </i>
										<i class="like1"> </i>
									</div>
									<div class="coursel_list1">
										<i class="a_twt"> </i>
										<i class="a_fb"> </i>
									</div>
									<div class="clear"></div>
							 	</div>
							</div>
							<div class="box1_right">
								<h4>Qualifications</h4>
								<p><?php echo $row["qualification"]; ?></p>
								<h4>Speciality</h4>
								<p class="para1"><?php echo $row["speciality"]; ?></p>
						    </div>
					    	<div class="clear"></div>
					 	</div>
					</div>
					
        			<?php
        			break;
        		case 6:
        			?>
        			<div class="col-md-4">
					    <div class="box2">
					  		<div class="box1_left">
							  	<?php echo '<img src="'.$row["img"].'" class="img-responsive" alt=""/>';?>	  				  		
						  		<div class="desc2">
								<h3><?php echo $row["trainer_name"]; ?><br><span class="m_text"><?php echo $row["trainer_class"]; ?></span></h3>
								<p>"<?php echo $row["description"]; ?>"</p>
								<div class="coursel_list">
									<i class="heart1"> </i>
									<i class="like"> </i>
								</div>
								<div class="coursel_list1">
									<i class="twt"> </i>
									<i class="fb"> </i>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="box1_right">
							<h4 class="right_text">Qualifications</h4>
							<p class="right_text1"><?php echo $row["qualification"]; ?></p>
							<h4 class="right_text">Speciality</h4>
							<p class="right_text2"><?php echo $row["speciality"]; ?></p>	
					    </div>
					   <div class="clear"></div>
					  </div>
					</div>
					<div class="clear"></div>
	    			</div>
        			<?php
        			break;

        			default:
        				?>
	        			<div class="row about_box">
	        			<div class="col-md-4">
						  	<div class="box1">
							  	<div class="box1_left">
							  		<?php echo '<img src="'.$row["img"].'" class="img-responsive" alt=""/>';?>	  			  		
								  	<div class="desc1">
										<h3><?php echo $row["trainer_name"]; ?><br><span class="m_text"><?php echo $row["trainer_class"]; ?></span></h3>
										<p>"<?php echo $row["description"]; ?>"</p>
										<div class="coursel_list">
											<i class="a_heart"> </i>
											<i class="like1"> </i>
										</div>
										<div class="coursel_list1">
											<i class="a_twt"> </i>
											<i class="a_fb"> </i>
										</div>
										<div class="clear"></div>
								 	</div>
								</div>
								<div class="box1_right">
									<h4>Qualifications</h4>
									<p><?php echo $row["qualification"]; ?></p>
									<h4>Speciality</h4>
									<p class="para1"><?php echo $row["speciality"]; ?></p>
							    </div>
						    	<div class="clear"></div>
						 	</div>
						</div>
						<div class="clear"></div>
	    				</div>
	        			<?php
	        	} 		
        	} 	
		?>
	    
	   </div>
    </div>
    <?php mysqli_close($conn);?>
   	<div class="login">
    <?php require "why-join.php"; ?>
    </div>
    <div class="testimonial">
	 	<div class="container">
	 		<i class="quot"> </i>
	 		<p>There is a different between INTEREST and COMMITMENT. When you are INTERESTED in doing something, you do it only when it is convienient. When you are COMMITTED to something, you accept no excuses, only results.</p>
	 		<p class="ceo">Quotation-<span class="ceo1">Kenneth Blanchard</span></p>
	 	</div>
    </div>
    <?php require "gallery-partner-col.php"; ?>
	</div>
	<?php require "footer.php"; ?>
</body>
</html>