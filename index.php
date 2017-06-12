
<?php session_start();?>
<?php
		require_once ('conf/setting.php');
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
	
		
?>
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
<link rel="stylesheet" href="css/style-index.css">

<script type="application/x-javascript"> 
	addEventListener("load", function() { 
		setTimeout(hideURLbar, 0); 
	}, false); 
	function hideURLbar(){ window.scrollTo(0,1); } 
</script>

<!--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
</script>

<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!-- //grid-slider -->
</head>

<body>

<!-- start header_top -->
<div class="header">
   <div class="container">
	  <div class="header-text">
		<h1>GYM AUT</h1>
		<h2>Gyms, Fitness, Sports and more</h2>
		<p>Check out our timetable for many available classes with our experienced personal trainers and qualified experts, we are here to ready to help you achieve your goals</p>
		<div class="banner_btn">
			<a href="trainers.php">Find more</a>
		</div>
	  </div>
	  <div class="header-arrow">
	     <a href="#menu" class="class scroll"><span> </span </a>
	  </div>
    </div>
  </div>
<!-- end header_top -->

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
		    <li class="active"><a href="index.php">Home</a> </li>
		    	
		   

		    <li><a href="about.php">About</a></li>
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
							 	<li><a href="profile.php">Your Profile</a></li>
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
 	<div class="container">
		<!-- start content-top -->
		<div class="row content-top">
			<div class="col-md-5">
				<img src="images/pic.png" class="img-responsive" alt=""/> 
		    </div>
			<div class="col-md-7 content_left_text">
			    <h3>Many special price and events for AUT students are availble now!</h3>
			    <p>Many fitness plans, classes and sport gears with special price are allways available. Following us to check out all our up comming events.</p>
			</div>
        </div>
	</div>
	<!-- end content-top -->
		<div class="container">
		    <div class="row content-middle">
		      <!-- start content-middle -->
	 	    	<div class="col-md-4"><a href="pricing.php">
	 	    		<ul class="spinning">
	 	    			<li class="live">live <span class="m_1">Spinning</span></li>
	 	    			<li class="room">Room 2</li>
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="images/pic3.jpg" class="img-responsive" alt=""/>
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div>
				 <div class="col-md-4"><a href="pricing.php">
	 	    		<ul class="spinning">
	 	    			<li class="live">live <span class="m_1">Gym</span></li>
	 	    			<li class="room">Room 1</li>
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="images/pic2.jpg" class="img-responsive"  alt=""/>
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div>
				 <div class="col-md-4"><a href="pricing.php">
	 	    		<ul class="spinning">
	 	    			<li class="live">live <span class="m_1">Pilates</span></li>
	 	    			<li class="room">Room 4</li>
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="images/pic1.jpg" class="img-responsive" alt=""/>
					      <div class="mask">
	                       	<div class="info">Read More</div>
			              </div>
	                  </div>
			     </a></div>
				<div class="clear"></div>
		   </div>
		  <!-- end content-middle -->
		  <?php require "content-middle-row.php";?>

		 <div class="row content_middle_bottom">
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
      <div class="row about">
		 <div class="col-md-8">
		     	 <h3 class="m_2">Gallery</h3>
		     	 <div id="ca-container" class="ca-container">
				    <div class="ca-wrapper">
				         <div class="ca-item ca-item-1">
						   <div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon1"> </div>
							</div>
						  </div>
						<div class="ca-item ca-item-2">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon2"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-3">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon3"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-4">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon4"> </div>
						     </div>
						</div>
						<div class="ca-item ca-item-5">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon5"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-6">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon6"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-7">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon7"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-8">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon"> </div>
							</div>
						</div>
			    </div>
			 </div>
				    <script type="text/javascript">
						$('#ca-container').contentcarousel();
					</script>
		   </div>
		   <div class="col-md-4">
		   	 <h3 class="m_2">Partner</h3>
			  <ul class="partner">
			  	<li><img src="images/p6.png" alt=""/></li>
			  	<li><img src="images/p5.png" alt=""/></li>
			  	<li><img src="images/p4.png" alt=""/></li>
			  	<li><img src="images/p3.png" alt=""/></li>
			  	<li><img src="images/p2.png" alt=""/></li>
			  	<li><img src="images/p1.png" alt=""/></li>
			  	 <div class="clear"></div>
			  </ul>
		   </div>
	       <div class="clear"></div>
	      </div>
	     </div>
		</div>
	    <div class="map">
			<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2&amp;output=embed"> </iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2" style="color:#666;font-size:12px;text-align:left"> </a></small>
			<div class="opening_hours">
			 <ul class="times">
			 	<h3>Opening <span class="opening">Hours</span></h3>
			 	<li><i class="calender"> </i><span class="week">Monday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Tuesday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Wednesday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Thrusday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Friday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Saturday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Sunday</span><div class="hours">h.6:00-h.24:00</div>  <div class="clear"></div></li>
			    <br>
			 	<h4>Enjoy!</h4>
			 </ul>
		    </div>
		</div>
		
		<?php require "footer.php"; ?>
</body>
</html>