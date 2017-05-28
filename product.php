<?php session_start();
      require_once ('config.php');

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Gym Website Template</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/cart_style.css">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="js/cart-js.js"></script>
<!-- //grid-slider -->
<!---calender-style-->    
<link rel="stylesheet" href="css/jquery-ui.css" />
<!---//calender-style-->		

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
		    <li><a href="about.php">About</a></li>
		    <li><a href="trainers.php">Trainers</a></li>
		    <li><a href="classes.php">Classes</a></li>
		    <li><a href="blog.php">Blog</a></li>
		    <li><a href="pricing.php">Pricing</a></li>
            <li class="active"><a href="product.php">Shop</a></li>
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
    
   <h2 style="height: 20px; margin-top: 20px; margin-left: 16%">Products</h2>

  	<div class="container">
        <div style="height: 120px;">
            <div style="height: 40px; ">&nbsp;</div>
            
            <form method="get">

                <div style="float: left;">
                    <input type="text" name="searchfield" style="width: 250px" required />
                    <input type = "button" name="submit" onClick = "getData('targetDiv', searchfield.value) " value = "Search">
                </div>
                <div style="float: left; margin-left: 1cm;">
                    <select name="sortfield">
                      <option value="">All products</option>
                      <option value="id">New products</option>
                      <option value="price">Hightest price</option>
                    </select>
                    <input type = "button" name="submit" onClick = "getSortData('targetDiv', sortfield.value) " value = "Sort">
                </div> 
                <div style="float: right" >
                  <a href="viewCart.php"><span id="cart_button">
                    <img src="images/cart_icon.png">
                    <input type="button" id="total_items" value="">
                  </span></a>   
                </div> 
            </form>
            
        </div>
          
        <div class="row" id="targetDiv">    
            <script type="text/javascript" src="do_search_sort.js"> </script> 
            <?php require "all_products.php";?>      
        </div>
    </div>

<div style="height: 70px;">&nbsp;</div>
<?php require "footer.php"; ?>
</body>
</html>

<div class="row">
        <div class="col-xs-4 col-md-6" ></div>
        <div class="col-xs-6"></div>
        <div class="col-xs-4"></div>
</div>