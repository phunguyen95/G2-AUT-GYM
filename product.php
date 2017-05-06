
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
<!---calender-style-->    
<link rel="stylesheet" href="css/jquery-ui.css" />
<!---//calender-style-->				  
</head>
<body>
<?php
    session_start();
    require_once ('conf/setting.php');
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }    
?>
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
            <li class="active"><a href="product.php">Products</a>
                <ul>
                    <li><a href="shopping-cart.php">Shopping Cart</a></li>
                </ul>
            </li>
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
    <div class=""><img src="images/100.jpg" class="img-responsive" alt=""/></div>
    <div class="about_banner_wrap">
	    <h1 class="m_11">Products</h1>
    </div>
  	<div class="container">
        <div class="row">     
                        <?php
                            $sql = "SELECT * FROM products";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {     
                                   echo '<div class="col-sm-4">
                                            <div class="col-item">
                                                <div class="photo"><img src="'.$row["img"].'" class="img-responsive" alt="a" /></div>
                                                     <div class="info">
                                                        <div class="row" style="width:372px">
                                                            <div class="price col-md-6"><h5>'.$row["id"].'<br>'.$row["name"].'</h5><h5 class="price-text-color">NZD $'.$row["price"].'</h5></div>
                                                            <div class="rating hidden-sm col-md-6">
                                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                                </i><i class="fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="separator clear-left">
                                                            <p class="btn-add">
                                                                <i class="fa fa-shopping-cart"></i><a href="more_detail.php?p='.$row["id"].'" class="hidden-sm">Add to cart</a></p>
                                                            <p class="btn-details">
                                                                <i class="fa fa-list"></i><a href="more_detail.php?p='.$row["id"].'" class="hidden-sm">More details</a></p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>';          
                                         
                                }
                            } else {
                                echo "Up comming...";
                            }
                        ?>
       
                
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