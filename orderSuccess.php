<?php
session_start();

if(!isset($_REQUEST['id'])){
    header("Location: product.php");
}

?>
<!DOCTYPE html>
<html lang="en">
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
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
</head>
<body>
<?php require "social-media-row.php"; ?>

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
<div class="container">
    <h1>Order Status</h1>
    <p>Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p>
</div>
<div style="height: 70px;">&nbsp;</div>
<?php require "footer.php"; ?>
</div>
</body>
</html>