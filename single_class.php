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
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!-- //grid-slider -->
<!---calender-style-->
<link rel="stylesheet" href="css/jquery-ui.css" />
<!---//calender-style-->		
</head>
<body>
    <!-- start header_bottom -->
    <?php require "social-media-row.php"; ?>
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
			   <li><a href="trainers.php">Trainers</a></li>
			   <li class="active"><a href="classes.php">Classes</a>
			   	 <ul>
					<li><a href="single_class.php#CardioFitness">Cardio Fitness</a></li>
					<li><a href="single_class.php#Pilates">Pilates</a></li>
					<li><a href="single_class.php#Aerobics">Aerobics</a></li>
				 </ul></li>
			   <li><a href="blog.php">Blog</a></li>
			   <li><a href="pricing.php">Pricing</a></li>
			   <li><a href="product.php">Product</a></li>
			   <li><a href="contact.php">Contact</a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
    <div class="main">
       <div class="about_banner_img"><img src="images/classes.jpg" class="img-responsive" alt=""/></div>
		 <div class="about_banner_wrap">
      	    <h1 class="m_11">Classes</h1>
      	 </div>
		 <div class="border"> </div> 

		 <div class="container">
		 <h2 id="CardioFitness">Cardio Fitness</h2>
		   <div class="row single-top">
				<div class="col-md-8">
				 <div class="single_class-left">
				  <img src="images/s3.jpg" alt=""/>
				  <div class="singe_desc">
				    <p>Cardiovascular fitness is the ability of the heart, blood cells and lungs to supply oxygen-rich blood to the working muscle tissues and the ability of the muscles to use oxygen to produce energy for movement.</p>
				    <ul class=single_grid>
				    	<li class="grid1">
				    	  <h3 class="m_13">Trainer</h3>
				    	  <img src="images/s2.jpg" class="img-responsive" alt=""/>
						  <h4>Lorem Ipsum<br><span class="m_text">Spinning</span></h4>
						  <p>Lorem ipsum dolor sit amet, consectetuer.</p>
				    	</li>
				    	<li class="grid2">
				    	   <h3 class="m_13">Featured</h3>
				    	   <ul class="list1_class">
				    	   	 <li><a href="#">One hour Sessions</a></li>
				    	   	 <li><a href="#">45 Minute Sessions</a></li>
				    	   	 <li><a href="#">Casual/Concession Rates</a></li>
				    	     <li><a href="#">24-hour cancellation fee</a></li>
				    	     <li><a href="#">Bookings Essential</a></li>
				    	   </ul>
				    	</li>
				    	<li class="grid3">
				    	   <h3 class="m_13">Pricing of class</h3>
				    	   <ul class="list2_class">
							 <li><a href="#">3 days session<p class="price">$ &nbsp;&nbsp;19,90 </p></a><div class="clear"></div></li>
							 <li><a href="#">7 days session<p class="price">$ &nbsp;&nbsp;15,90 </p></a><div class="clear"></div></li>
							 <li><a href="#">15 days session<p class="price">$ &nbsp;&nbsp;27,90 </p></a><div class="clear"></div></li>
							 <li><a href="#">50 days session<p class="price">$ &nbsp;&nbsp;45,90 </p></a><div class="clear"></div></li>
							 <li><a href="#">30 days session<p class="price">$ &nbsp;&nbsp;65,90 </p></a><div class="clear"></div></li>
						   </ul>
				    	</li>
				    	<div class="clear"></div>
				    </ul>
				  </div>
			     </div>
			     </div>
			     <div class="col-md-4 single_class-right">
			        <ul class="single_times">
					 	<h3>Opening <span class="opening">Hours</span></h3>
					 	<li><i class="calender"> </i><span class="week_class">Monday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Tuesday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Wednesday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Thrusday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Friday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Saturday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Sunday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 </ul>
					 <h3 class="m_4">Membership Prices</h3>
					  <div class="members">
					   <h4 class="m_3">25% Discount of for all members</h4>
					   <p>Discount on services and <br>treatments at the GymBase for<br> all membership cards holders.</p>
					   <div class="btn1">
					    <a href="#">More</a>
				       </div>
					 </div>
		         </div>
				<div class="clear"></div>
			</div>
		  </div>

		 <div class="container">
		 <h2 id="Pilates">Pilates</h2>
		   <div class="row single-top">
				<div class="col-md-8">
				 <div class="single_class-left">
				  <img src="images/s1.jpg" alt=""/>
				  <div class="singe_desc">
				    <p>Enjoy Pilates training class to help you strengthen, tone, shape, and create flexibility. Or if you have an injury come and see one of our highly trained physiotherapists to get you back on track and feeling great. We have made it easy, with no subscriptions and the most Pilates classes in Auckland. Whether a beginner or an advanced student, you can join a class in any of our eleven different locations in Auckland. </p>
				    <ul class=single_grid>
				    	<li class="grid1">
				    	  <h3 class="m_13">Trainer</h3>
				    	  <img src="images/s2.jpg" class="img-responsive" alt=""/>
						  <h4>Lorem Ipsum<br><span class="m_text">Spinning</span></h4>
						  <p>Lorem ipsum dolor sit amet, consectetuer.</p>
				    	</li>
				    	<li class="grid2">
				    	   <h3 class="m_13">Featured</h3>
				    	   <ul class="list1_class">
				    	   	 <li><a href="#">One hour Sessions</a></li>
				    	   	 <li><a href="#">45 Minute Sessions</a></li>
				    	   	 <li><a href="#">Casual/Concession Rates</a></li>
				    	     <li><a href="#">24-hour cancellation fee</a></li>
				    	     <li><a href="#">Bookings Essential</a></li>
				    	   </ul>
				    	</li>
				    	<li class="grid3">
				    	   <h3 class="m_13">Pricing of class</h3>
				    	   <ul class="list2_class">
							 <li><a href="#">3 days session<p class="price">$ &nbsp;&nbsp;19,90 </p></a><div class="clear"></div></li>
							 <li><a href="#">7 days session<p class="price">$ &nbsp;&nbsp;15,90 </p></a><div class="clear"></div></li>
							 <li><a href="#">15 days session<p class="price">$ &nbsp;&nbsp;27,90 </p></a><div class="clear"></div></li>
							 <li><a href="#">50 days session<p class="price">$ &nbsp;&nbsp;45,90 </p></a><div class="clear"></div></li>
							 <li><a href="#">30 days session<p class="price">$ &nbsp;&nbsp;65,90 </p></a><div class="clear"></div></li>
						   </ul>
				    	</li>
				    	<div class="clear"></div>
				    </ul>
				  </div>
			     </div>
			     </div>
			     <div class="col-md-4 single_class-right">
			        <ul class="single_times">
					 	<h3>Opening <span class="opening">Hours</span></h3>
					 	<li><i class="calender"> </i><span class="week_class">Monday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Tuesday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Wednesday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Thrusday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Friday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Saturday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Sunday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 </ul>
					 <h3 class="m_4">Membership Prices</h3>
					  <div class="members">
					   <h4 class="m_3">25% Discount of for all members</h4>
					   <p>Discount on services and <br>treatments at the GymBase for<br> all membership cards holders.</p>
					   <div class="btn1">
					    <a href="#">More</a>
				       </div>
					 </div>
		         </div>
				<div class="clear"></div>
			</div>
		  </div>

		 <div class="container">
		 <h2 id="Aerobics">Aerobics</h2>
		   <div class="row single-top">
				<div class="col-md-8">
				 <div class="single_class-left">
				  <img src="images/s4.jpg" alt=""/>
				  <div class="singe_desc">
				    <p>Aerobics is a form of physical exercise that combines rhythmic aerobic exercise with stretching and strength training routines with the goal of improving all elements of fitness (flexibility, muscular strength, and cardio-vascular fitness).</p>
				    <ul class=single_grid>
				    	<li class="grid1">
				    	  <h3 class="m_13">Trainer</h3>
				    	  <img src="images/s2.jpg" class="img-responsive" alt=""/>
						  <h4>Lorem Ipsum<br><span class="m_text">Spinning</span></h4>
						  <p>Lorem ipsum dolor sit amet, consectetuer.</p>
				    	</li>
				    	<li class="grid2">
				    	   <h3 class="m_13">Featured</h3>
				    	   <ul class="list1_class">
				    	   	 <li><a href="#">One hour Sessions</a></li>
				    	   	 <li><a href="#">45 Minute Sessions</a></li>
				    	   	 <li><a href="#">Casual/Concession Rates</a></li>
				    	     <li><a href="#">24-hour cancellation fee</a></li>
				    	     <li><a href="#">Bookings Essential</a></li>
				    	   </ul>
				    	</li>
				    	<li class="grid3">
				    	   <h3 class="m_13">Pricing of class</h3>
				    	   <ul class="list2_class">
							 <li><a href="#">3 days session<p class="price">$ &nbsp;&nbsp;19,90 </p></a><div class="clear"></div></li>
							 <li><a href="#">7 days session<p class="price">$ &nbsp;&nbsp;15,90 </p></a><div class="clear"></div></li>
							 <li><a href="#">15 days session<p class="price">$ &nbsp;&nbsp;27,90 </p></a><div class="clear"></div></li>
							 <li><a href="#">50 days session<p class="price">$ &nbsp;&nbsp;45,90 </p></a><div class="clear"></div></li>
							 <li><a href="#">30 days session<p class="price">$ &nbsp;&nbsp;65,90 </p></a><div class="clear"></div></li>
						   </ul>
				    	</li>
				    	<div class="clear"></div>
				    </ul>
				  </div>
			     </div>
			     </div>
			     <div class="col-md-4 single_class-right">
			        <ul class="single_times">
					 	<h3>Opening <span class="opening">Hours</span></h3>
					 	<li><i class="calender"> </i><span class="week_class">Monday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Tuesday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Wednesday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Thrusday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Friday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Saturday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 	<li><i class="calender"> </i><span class="week_class">Sunday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
					 </ul>
					 <h3 class="m_4">Membership Prices</h3>
					  <div class="members">
					   <h4 class="m_3">25% Discount of for all members</h4>
					   <p>Discount on services and <br>treatments at the GymBase for<br> all membership cards holders.</p>
					   <div class="btn1">
					    <a href="#">More</a>
				       </div>
					 </div>
		         </div>
				<div class="clear"></div>
			</div>
		  </div>

		  <div class="login">
		    <?php require "why-join.php";?>
	     </div>
	     <div class="testimonial">
		 	<div class="container">
		 		<i class="quot"> </i>
		 		<h1>No pain, no gain!</h1>
		 		
		 	</div>
	     </div>
	    </div>
	    <?php require "footer.php";?>
</body>
</html>