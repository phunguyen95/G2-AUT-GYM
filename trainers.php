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
<?php require "social-media-row.php";?>
	  <!-- start menu -->
    <div class="menu">
	  <div class="container">
		 <div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li><a href="index.php">Home</a></li>
			   <li><a href="about.php">About</a></li>
			   <li class="active"><a href="trainers.php">Trainers</a></li>
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
	  <div class="about_banner_img"><img src="images/trine_img.jpg" class="img-responsive" alt=""></div>
	  <div class="about_banner_wrap">
      	  <h1 class="m_11">Timetable</h1>
      </div>
       <div class="border"> </div> 
       <div class="container">
       		
       		<!---start timetable-->
       		<?php require "timetable.php";?>

       		<!---start 'our trainers'-->
			<div class="row trainers_middle_bottom">
			 	
			 	<?php require "small_trainer_box.php";?>
			    
			    <div class="col-md-4">
			     	 <h3 class="m_2">Next Events</h3>
			     	 <div class="events">
			     	 	<div class="event-top">
				     	 	<ul class="event1">
				     	 		<h4>26 April, 2014</h4>
				     	 		<img src="images/pic.jpg" alt=""/>
				     	 	</ul>
				     	 	<ul class="event1_text">
				     	 		<span class="m_5">h.12.00-h.13.00</span>
				     	 		<h4>Aerobics</h4>
				     	 		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,. </p>
				     	 		<div class="btn2">
								   <a href="#">Reservation</a>
								</div>
				     	 	</ul>
			     	 		<div class="clear"></div>
			     	 	</div>
			     	 	<div class="event-bottom">
				     	 	<ul class="event1">
				     	 		<h4>26 April, 2014</h4>
				     	 		<img src="images/pic.jpg" alt=""/>
				     	 	</ul>
				     	 	<ul class="event1_text">
				     	 		<span class="m_5">h.12.00-h.13.00</span>
				     	 		<h4>Spinning</h4>
				     	 		<p>Lorem ipsum dolor sit amet. </p>
				     	 		<div class="btn2">
								   <a href="#">Reservation</a>
								</div>
				     	 	</ul>
			     	 		<div class="clear"></div>
			     	 	</div>
			     	 </div>
			       </div>
			       <div class="col-md-4">
			     	 <h3 class="m_2">From the blog</h3>
			     	 <div class="blog_events">
			     	 	<ul class="tab-left1">
							<span class="tab1-img"><img src="images/pic7.jpg" alt=""></span>
							<div class="tab-text1">
							 <p><a href="#">nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip</a></p>
							 <span class="m_date">25 April, 2014</span>
							</div>
							<div class="clear"></div>
						</ul>
						<ul class="tab-left1">
							<span class="tab1-img"><img src="images/pic6.jpg" alt=""></span>
							<div class="tab-text1">
							 <p><a href="#">soluta nobis eleifend option congue nihil imperdiet doming id</a></p>
							 <span class="m_date">25 April, 2014</span>
							</div>
							<div class="clear"></div>
						</ul>
						<ul class="tab-last1">
							<span class="tab1-img"><img src="images/pic8.jpg" alt=""></span>
							<div class="tab-text1">
							 <p><a href="#">quod mazim placerat facer possim assum. Typi non habent</a></p>
							 <span class="m_date">25 April, 2014</span>
							</div>
							<div class="clear"></div>
						</ul>
			     	 </div>
			        </div>
        <div class="clear"></div>
       </div>
      </div>
      <div class="traine_login">
	  	    <?php require "why-join.php";?>
	  </div>
	 <?php require "gallery-partner-col.php";?>
      </div>
    <?php require "footer.php";?>
</body>
</html>