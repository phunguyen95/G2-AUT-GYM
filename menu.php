
<!-- start header_bottom -->
  <div class="header-bottom">
	 <div class="container">
		<div class="header-bottom_left">
			<i -class="phone"> </i><span>021-085-22697</span>
		</div>
		<div class="social">	
		   <ul>	
			  <li class="facebook"><a href="#"><span> </span></a></li>
			  <li class="twitter"><a href="#"><span> </span></a></li>
			  <li class="pinterest"><a href="#"><span> </span></a></li>	
			  <li class="google"><a href="#"><span> </span></a></li>
			  <li class="tumblr"><a href="#"><span> </span></a></li>
			  <li class="instagram"><a href="#"><span> </span></a></li>	
			  <li class="rss"><a href="#"><span> </span></a></li>							
		   </ul>
	   </div>
	   <div class="clear"></div>
	</div>
  </div>
<!-- end header_bottom -->

<!-- start menu -->
<div class="menu" id="menu">
  <div class="container">
	<div class="logo">
		<a href="index.html"><img src="images/logo.png" alt=""/></a>
	</div>
	<div class="h_menu4"><!-- start h_menu4 -->
	    <a class="toggleMenu" href="#">Menu</a>
		<ul class="nav">
		    <li class="active"><a href="index.php">Home</a></li>
		    <li><a href="about.php">About</a></li>
		    <li><a href="trainers.html">Trainers</a></li>
		    <li><a href="classes.html">Classes</a></li>
		    <li><a href="blog.html">Blog</a></li>
		    <li><a href="pricing.html">Pricing</a></li>
		    <li><a href="contact.html">Contact</a></li>
		    <?php
		        if(isset($_SESSION["lname"])){
					echo '<li><a href="logout.php">Log Out</a></li>';
			    }else{
					echo ' <li><a href="signin.html">Sign In</a></li>';
				}
			?>
		</ul>
		<script type="text/javascript" src="js/nav.js"></script>
	  </div><!-- end h_menu4 -->

	 <div class="clear"></div>
  </div>
</div>
<!-- end menu -->
