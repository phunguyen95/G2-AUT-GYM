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
			   <li class="active"><a href="blog.php">Blog</a></li>
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
       <div class="about_banner_img"><img src="images/blog.jpg" class="img-responsive" alt=""/></div>
		 <div class="about_banner_wrap">
      	    <h1 class="m_11">Blog</h1>
      	</div>
      	<div class="border"> </div>
      	<div class="container">
      		<div class="row single-top">
		  	   <div class="col-md-8">
		  	    <?php
					require_once ('config.php');
				    $sql = "SELECT * FROM blog";

				    foreach ($dbo->query($sql) as $row) {
				    	?>
							<div class="blog_box">
							 	<div class="blog_grid">
							  		<h3><a href="blog_single.php"><?php echo $row['title'];?></a></h3>
							  			<a href="blog_single.php"><?php echo '<img src="'.$row["img"].'" class="img-responsive" alt=""/>';?></a>
							  <div class="singe_desc">
							    <p>
							    	<?php $sub = substr($row["description"], 0, 255);
							    		  echo $sub."... .";
							    	?>
							    </p>
							     <div class="comments">
					  				<ul class="links">
					  					<li><a href="#"><i class="blog_icon1"> </i><br><span>
					  					<?php 
					  						$date = date_create($row["date"]);		
					  						echo date_format($date,"F j, Y");
					  					?>	
					  					</span></a></li>
					  					<li><a href="#"><i class="blog_icon2"> </i><br><span><?php echo $row["author"];?></span></a></li>
					  					<li><a href="#"><i class="blog_icon3"> </i><br><span><?php echo $row["react"];?></span></a></li>
					  					<li><?php echo '<a href="'.$row["blog_id"].'">';?><i class="blog_icon4"> </i><br><span><?php echo $row["cmt_num"];?></span></a></li>
					  					
					  				</ul>
					  				<div class="btn_blog"><?php echo '<a href="blog_single.php">Read More</a>';?>
						            </div>
					  		        <div class="clear"></div>
					  		     </div>
							  </div>
							 </div>
							</div>
				    	<?php

				    }
				   
				?>

				<ul class="dc_pagination dc_paginationA dc_paginationA06">
				  <li><a href="#" class="current">Prev</a></li>
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">...</a></li>
				  <li><a href="#">19</a></li>
				  <li><a href="#">20</a></li>
				  <li><a href="#" class="current">Next</a></li>
		       </ul>
			</div>


			   <div class="col-md-4 ">
			    	<ul class="blog-list">
					  <h4>Categories</h4>
					  <li><a href="#">Events</a></li>
					  <li><a href="#">Aerobics</a></li>
					  <li><a href="#">Crossfit</a></li>
					  <li><a href="#">Spinning</a></li>
					  <li><a href="#">news</a></li>
				    </ul>
				    <ul class="recent-list">
					  <h4>Recent Posts</h4>
					  <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
					  <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
					  <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
					  <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
					</ul>
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
					  
			    <h3 class="m_14">Membership Prices</h3>
			    <div class="members">
				   <h4 class="m_3">25% Discount of for all members</h4>
				   <p>Discount on services and <br>treatments at the GymBase for<br> all membership cards holders.</p>
				   <div class="btn1">
				    <a href="#">More</a>
			       </div>
				  </div>
				  <ul  class="blog-list1">
					 <h4>Tags</h4>
						<li><a href="#">Personal Trainner</a></li>
						<li><a href="#">Gyms</a></li>
						<li><a href="#">Fitness</a></li>
						<li><a href="#">Dancing</a></li>
						<li><a href="#">Spinning</a></li>
						<li><a href="#">Aerobics</a></li>
						<li><a href="#">pilates</a></li>
						<li><a href="#">Yoga</a></li>
						<div class="clear"></div>
					</ul>
		   	     </div>
				<div class="clear"></div>
			  </div>
      	</div> 
     </div>
     <?php require "footer.php"; ?>
</body>
</html>