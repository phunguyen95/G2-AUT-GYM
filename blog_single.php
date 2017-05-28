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
    <!-- start header_bottom -->
   <?php require "social-media-row.php";?>
    <!-- start menu -->
    <div class="menu">
	  <div class="container">
		 <div class="logo">
			<a href="index.php"><img src="images/logo.png" class="img-responsive" alt=""/></a>
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
			   <li><a href="product.php">Shop</a> </li>
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
			?>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
	 <div class="main">
       <div class="about_banner_img"><img src="images/blog_single.jpg"  class="img-responsive" alt=""/></div>
		 <div class="about_banner_wrap">
      	    <h1 class="m_11">Blog</h1>
      	</div>
      	<div class="border"> </div>
      	<div class="container">
		  <div id="#1" class="row single-top">
		  	   <div class="col-md-8">
		  	     	<div class="blog_single_grid">
		  	     	<?php
						require_once ('config.php');
					    
					  	$sql = "SELECT * FROM blog";
					    
					    foreach ($dbo->query($sql) as $row) {
					    	?>
							  <ul class="links_blog">
							  	<h3><a href="#"><?php echo $row['title'];?></a></h3>
					  			<li><a href="#"><i class="blog_icon5"> </i><span>
					  				<?php 
				  						$date = date_create($row["date"]);		
				  						echo date_format($date,"F j, Y");
				  					?>	
						  			</span></a> <div class="clear"></div></li>
						  			<li><a href="#"><i class="blog_icon6"> </i><span><?php echo $row["author"];?></span></a><div class="clear"></div></li>
						  			<li><a href="#"><i class="blog_icon7"> </i><span><?php echo $row["react"];?></span></a><div class="clear"></div></li>
						  			<li><a href="#"><i class="blog_icon8"> </i><span><?php echo $row["cmt_num"];?></span></a><div class="clear"></div></li>
						  		  </ul>
								  <?php echo '<img src="'.$row['img'].'" class="img-responsive" alt=""/>';?>
								  <div class="blog_single_desc">
								    <?php echo $row["description"];?>
								  </div>
								  <ul class="social_blog">	
								   	<h3>Share</h3>
									 <li class="fb"><a href="#"><span> </span></a></li>
									 <li class="tw"><a href="#"><span> </span></a></li>
									 <li class="google_blog"><a href="#"><span> </span></a></li>
									 <li class="linkedin"><a href="#"><span> </span></a></li>	
									 <div class="clear"></div>
								 </ul>
								 <ul class="comments">
								 	<h4><?php echo $row["cmt_num"];
								 		if($row["cmt_num"] > 1){
								 			echo " Comments";
								 		}else{
								 			echo " Comment";
								 		}	
								 	?></h4>

								 	<?php
								 		$v = $row['blog_id'];
								 		$sql2 = "SELECT * FROM comment where blog_id='$v'";
									    $result2 = mysqli_query($conn, $sql2);

									    while($row2 = mysqli_fetch_assoc($result2)){
									    	?>
									    		<li>
										        	<ul class="comment_head">
										        		<h5><?php echo $row2['username'];?>&nbsp;&nbsp;&nbsp; <span class="m_21"><a href="#">
										        			<?php 
										  						$date2 = date_create($row2["date"]);		
										  						echo date_format($date2,"F j, Y");
										  					?>	
										        		</a></span></h5> <div class="reply1"><i class="reply"> </i><span class="m_22"><a href="">Reply</a></span></div><div class="clear"></div>
										        	</ul>
										            <i class="preview"> </i>
										            <div class="data">
										               <p><?php echo $row2["comment"];?></p>
										            </div>
										            <div class="clear"></div>
										        </li>
									    	<?php	
									    }
								 	?>
							        
				
				  			 	<h4>Leave a comment</h4>
				  			  	<form id="commentform">
								     <p class="comment-form-author">
										<input id="author" name="author" type="text" value="" size="30" aria-required="true" placeholder="Name">
									 </p>
									 <p class="comment-form-email">
										<input id="email" name="email" type="text" value="" size="30" aria-required="true" placeholder="Email">
									 </p>
									 <p class="comment-form-comment">
										<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Comment"></textarea>
									 </p>
									 <p class="form-submit">
							           <input name="submit" type="submit" id="submit" value="Send">
									 </p>
									 <div class="clear"></div>
							   	</form>
							  </ul>
					    	<?php

					    }
					    
					?>

			    </div>
			   </div>
			   <div class="col-md-4">
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