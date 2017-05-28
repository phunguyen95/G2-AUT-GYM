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
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!-- //grid-slider -->
</head>

<body>
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
			   <li><a href="classes.php">Classes</a></li>
			   <li><a href="blog.php">Blog</a></li>
			   <li><a href="pricing.php">Pricing</a></li>
			   <li><a href="product.php">Shop</a></li>
			   <li class="active"><a href="contact.php">Contact</a></li>
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
     <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Auckland&amp;aq=0&amp;oq=un&amp;sll=174.7660614,-36.8546199&amp;sspn=174.7660614,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=174.7660614,-36.8546199&amp;spn=174.7660614,174.7660614&amp;t=m&amp;z=2&amp;output=embed"> </iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=174.7660614,-36.8546199&amp;sspn=174.7660614,174.7660614&amp;ie=UTF8&amp;hq=&amp;hnear=Auckland&amp;ll=174.7660614,-36.8546199&amp;spn=174.7660614,68.554687&amp;t=m&amp;z=2" style="color:#666;font-size:12px;text-align:left"> </a></small>
        <div class="about_banner_wrap">
      	   <h1 class="m_11">Contact</h1>
      	</div>

      	<?php 
		if(isset($_POST['submit'])){
		    $to = "phu.nguyen09995@gmail.com"; // this is your Email address
		    $from = $_POST['email']; // this is the sender's Email address
		    $first_name = $_POST['first_name'];
		    $subject = "Form submission";
		    $subject2 = "Copy of your form submission";
		    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
		    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

		    $headers = "From:" . $from;
		    $headers2 = "From:" . $to;
		    mail($to,$subject,$message,$headers);
		    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
		    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
		    // You can also use header('Location: thank_you.php'); to redirect to another page.
		    }
		?>
      	<div class="border"> </div>
      	<div class="rwo contact">
      	  <div class="container">
      		 <div class="col-md-8 contact-top">
			  <h3>Send us a message</h3>
			  <p class="contact_msg">Complete the form to send us a message!</p>
			     <form method="post" action="">
					<div class="to">
                     	<input type="text" name="first_name" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					 	<input type="text" class="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:20px">
					 	<input type="text" class="text"  name="subject"  value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left:20px">
					</div>
					<div class="text">
	                   <textarea name="message" value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
	                </div>
	                <div class="form-submit1">
			           <input name="submit" type="submit" id="submit" value="Submit Your Message"><br>
			           <p class="m_msg">Make sure you put a valid email</p>
					</div>
					<div class="clear"></div>
                 </form>
             </div>
             <div class="col-md-4 contact-top_right">
			  <h3>contact info</h3>
			  <p>For any information, please contact directly from the centre or from phone number and email adress below.</p>
			  <ul class="contact_info">
			  	<li><i class="mobile"> </i><span>021-085-22-697</span></li>
			  	<li><i class="message"> </i><span class="msg">info@gym.com</span></li>
			  </ul>
	 		 </div>
      	  </div>
        </div>
         <div class="trainers_middle_bottom">
		 	<div class="container">
			  <div class="col-md-4">
		       <div class="contact_hours">
				 <ul class="times_contact">
				 	<h3>Opening <span class="opening">Hours</span></h3>
				 	<li><i class="calender"> </i><span class="contact_week">Monday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
				 	<li><i class="calender"> </i><span class="contact_week">Tuesday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
				 	<li><i class="calender"> </i><span class="contact_week">Wednesday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
				 	<li><i class="calender"> </i><span class="contact_week">Thrusday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
				 	<li><i class="calender"> </i><span class="contact_week">Friday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
				 	<li><i class="calender"> </i><span class="contact_week">Saturday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
				 	<li><i class="calender"> </i><span class="contact_week">Sunday</span><div class="hours1">h.6:00-h.24:00</div>  <div class="clear"></div></li>
				    <p>All classes are now available!</p>
				 	<h4>Enjoy it!</h4>
				 </ul>
		       </div>
            </div>
           <div class="col-md-4">
     	 <h3 class="m_2">Next Events</h3>
     	 <div class="events">
     	 	<div class="event-top">
	     	 	<ul class="event1">
	     	 		<h4>26 April, 2014</h4>
	     	 		<img src="images/pic.jpg" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<span class="m_5">h.12.00-h.13.00</span>
	     	 		<h4>Aerobics</h4>
	     	 		<p>Lorem ipsum dolor sit. </p>
	     	 		<div class="btn2">
					   <a href="#">Reservation</a>
					</div>
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom">
	     	 	<ul class="event1">
	     	 		<h4>26 April, 2014</h4>
	     	 		<img src="images/pic.jpg" alt="">
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<span class="m_5">h.12.00-h.13.00</span>
	     	 		<h4>Spinning</h4>
	     	 		<p>Lorem ipsum dolor sit amet, consectetuer. </p>
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
     	<div class="contact_bottom">
     	  <ul class="join_text">
	     	  <h3>Why Join ?
	     	  <br> <span class="m_26">Nothing tastes as good as getting in shape feels</span></h3>
	     	   <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Work-out to get althy, prevent osteoporosis and improve muscle &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strength, balance and flexibility. </p>	
	      </ul>
     	  <ul class="btn_contact">
			 <a href="#">Join Today</a>
		  </ul>
		  <div class="clear"></div>
     	</div>
     <div class="clear"></div>
     </div>
     </div>
     <?php require "gallery-partner-col.php";?>
    </div>
   <?php require "footer.php";?>
</body>
</html>