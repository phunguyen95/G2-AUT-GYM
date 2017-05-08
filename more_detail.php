
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
<!---calender-style---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<!---//calender-style---->                
</head>
<body>
<?php
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
            <li class="active"><a href="product.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php
                if(isset($_SESSION["lname"])){
                    echo '<li><a href="#">Hi '.$_SESSION["lname"].'</a>
                             <ul>
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
    <div class="about_banner_img"><img src="images/100.jpg" class="img-responsive" alt=""/></div>
    <div class="about_banner_wrap">
        <h1 class="m_11">Products</h1>
    </div>
    <div class="container">
        <div style="height: 70px;">&nbsp;</div>
        <?php
            $id = $_GET['p'];
            $sql = "SELECT * FROM products WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {     
                    echo   '<div style="width: 100%; height: 660px">
                                <div style="float: left; width: 45%;"><img src="'.$row["img"].'" class="img-responsive" alt="a" /></div>
                                <div style"float: left: width:5%">&nbsp;</div>
                                <div style="float: left: width:50%; text-align: justify;">
                                    <h2>'.$row["id"].'<br>'.$row["name"].'</h2>
                                    <h2 class="price-text-color">NZD $'.$row["price"].'</h2>
                                    <b>Colour:</b> '.$row["colour"].'<br>
                                    <b>Description</b><br>
                                    <div>'.$row["description"].'
                                </div>
                                <br>
                                <form method="POST" action="shopping_cart.php?action=add&id='.$row["id"].'">
                                <div style="float: left;"><p class="btn-add">
                                    <i class="fa fa-shopping-cart"></i>
                                    <div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
                                    </p>
                                </div>
                                </form>
                                <br><br>
                                <div style="float: right;"><a href="product.php">Back to Product page</a></div>
                            </div>

                            <div class="clearfix"></div>
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