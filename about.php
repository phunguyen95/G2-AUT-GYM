
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
		    <li><a href="product.php">Products</a></li>
		    <li><a href="contact.php">Contact</a></li>
		    <?php
		        if(isset($_SESSION["lname"])){
					echo '<li><a href="logout.php">Log Out</a></li>';
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
	      <div class="row about_box">
	      	<div class="col-md-4">
			  <div class="box1">
			  	<div class="box1_left">
					  <img src="images/about_img3.jpg" class="img-responsive" alt=""/>				  		
				  <div class="desc1">
					<h3>Trainer 01<br><span class="m_text">Personal Trainer</span></h3>
					<p>"My sessions are dynamic, interesting and fun-filled!"</p>
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
					<p>Bachelor of Sport and Recreation at AUT<br>
					   Diploma in Fitness Centre Training at AUT<br>
					   Post Graduate Diploma in Secondary Teaching
					</p>
					  <h4>Speciality</h4>
					 <p class="para1">Group Fitness<br>Weight Loss<br>Mobility and Flexibility<br>Functional Movement<br>High Intensity Interval Training</p>
			    </div>
			   <div class="clear"></div>
			  </div>
			</div>
			<div class="col-md-4">
			  <div class="box2">
			  	<div class="box1_left">
					  <img src="images/about_img2.jpg" class="img-responsive" alt=""/>				  		
				  <div class="desc2">
					<h3>Trainer 02<br><span class="m_text">Personal Trainer</span></h3>
					<p>"Make your life, your mind, body and spirit more active."</p>
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
					<p class="right_text1">Year 2 of Sport and Exercise Science degree<br>REPs Registered Personal Trainer</p>
					<h4 class="right_text">Speciality</h4>
					<p class="right_text2">
					    Injury prevention<br>
					    Core Conditioning<br>
					    Weight Loss / Toning<br>
					    Fitness<br>
					    Group Fitness<br>
					    Nutrition<br>
					    Deep Tissue Sports Massage
					</p>
			    </div>
			   <div class="clear"></div>
			  </div>
			</div>
			<div class="col-md-4">
			  <div class="box1">
			  	<div class="box1_left">
					  <img src="images/about_img4.jpg" class="img-responsive" alt=""/>				  		
				  <div class="desc1">
					<h3>Trainer 03<br><span class="m_text">Personal Trainer</span></h3>
					<p>"I am here to keep you on track while staying accountable to your goals."</p>
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
					<p>Fitness Instructor/Exercise Consultant<br>
					    Foundation Skills<br>
					    REPs Registered 
					</p>
					  <h4>Speciality</h4>
					 <p class="para1">Group Fitness<br>Fitness<br>Core Strength<br>Weight Loss<br>Nutrition<br>Injury Prevention<br>Increased Fitness</p>
			    </div>
			   <div class="clear"></div>
			  </div>
			</div>
			<div class="clear"></div>
	     </div>
	     <div class="row about_box1">
	      <div class="col-md-4">
			  <div class="box2">
			  	<div class="box1_left">
					  <img src="images/about_img5.jpg" class="img-responsive" alt=""/>				  		
				  <div class="desc2">
					<h3>Trainer 04<br><span class="m_text">Personal Trainer</span></h3>
					<p>"I will help you discover why loving life involves loving exercise."</p>
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
					<p class="right_text1">Bachelor of Sport and Recreation at AUT<br>
					   Diploma in Fitness Centre Training at AUT<br>
					   Post Graduate Diploma in Secondary Teaching at AUT
					</p>
					<h4 class="right_text">Speciality</h4>
					<p class="right_text2">Mobility and Flexibility<br>Functional Movement<br>Fitness<br>High Intensity Interval Training</p>
			    </div>
			   <div class="clear"></div>
			  </div>
			</div>
			<div class="col-md-4">
			 <div class="box1">
			  	<div class="box1_left">
					  <img src="images/about_img7.jpg" class="img-responsive" alt=""/>				  		
				  <div class="desc1">
					<h3>Trainer 05<br><span class="m_text">Personal Trainer</span></h3>
					<p>"Make it fun, keep it fundamental, and ensure it is functional."</p>
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
					<p>Fitness Instructor/Exercise Consultant<br>Foundation Skills<br>REPs Registered </p>
					<h4>Speciality</h4>
					<p class="para1">
						Injury rehabilitation/prevention<br>Core Conditioning<br>
					    Fitness<br>Nutrition<br>
					    Deep Tissue Sports Massage
					</p>
			    </div>
			   <div class="clear"></div>
			  </div>
			</div>
			<div class="col-md-4">
			  <div class="box2">
			  	<div class="box1_left">
					  <img src="images/about_img6.jpg" class="img-responsive" alt=""/>				  		
				  <div class="desc2">
					<h3>Trainer 06<br><span class="m_text">Personal Trainer</span></h3>
					<p>"I want to show you how simple mind shifts can make dramatic life changes."</p>
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
					<p class="right_text1">Bachelor of Sport and Recreation at AUT<br>
					   Diploma in Fitness Centre Training at AUT<br>
					   Post Graduate Diploma in Secondary Teaching at AUT
					</p>
					<h4 class="right_text">Speciality</h4>
					<p class="right_text2">Mobility and Flexibility<br>Functional Movement<br>Nutrition<br>High Intensity Interval Training</p>
			    </div>
			   <div class="clear"></div>
			  </div>
			</div>
			<div class="clear"></div>
	     </div>
	   </div>
    </div>
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