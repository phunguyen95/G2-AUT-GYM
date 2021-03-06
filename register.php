
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
			   <li class="active"><a href="index.php">Home</a></li>
			   <li><a href="about.php">About</a></li>
			   <li><a href="trainers.php">Trainers</a></li>
			   <li><a href="classes.php">Classes</a></li>
			   <li><a href="blog.php">Blog</a></li>
			   <li><a href="pricing.php">Pricing</a></li>
			   <li><a href="product.php">Shop</a></li>
			   <li><a href="contact.php">Contact</a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
    <div class="main">
	    <div class="register-grids">
	      	<div class="container">
				<form> 
					<div class="register-top-grid">
							<h3>PERSONAL INFORMATION</h3>
							<div>
								<span>First Name<label>*</label></span>
								<input type="text"> 
							</div>
							<div>
								<span>Last Name<label>*</label></span>
								<input type="text"> 
							</div>
							<div>
								<span>Email Address<label>*</label></span>
								<input type="text"> 
							</div>
							<div class="clear"> </div>
								<a class="news-letter" href="#">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
								</a>
							<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					<div class="register-bottom-grid">
							<h3>LOGIN INFORMATION</h3>
							<div>
								<span>Password<label>*</label></span>
								<input type="text">
							</div>
							<div>
								<span>Confirm Password<label>*</label></span>
								<input type="text">
							</div>
							<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					<input type="submit" value="submit">
				</form>
			</div>
		</div>
    </div>
    <?php require "footer.php"; ?>
</body>
</html>