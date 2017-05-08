
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
            <li class="active"><a href="product.php">Shop</a></li>
		    <li><a href="contact.php">Contact</a></li>
		   <?php
                if(isset($_SESSION["lname"])){
                    echo '<li><a href="#">Hi '.$_SESSION["lname"].'</a>
                             <ul>
                                <li><a href="profile.php">View Profile</a></li>
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
    <div class=""><img src="images/100.jpg" class="img-responsive" alt=""/></div>
    <div class="about_banner_wrap">
	    <h1 class="m_11">YOUR PROFILE</h1>
    </div>
  	<div class="container">
    <div style="height: 70px">&nbsp;</div>
        <div class="row">     
            <?php
            $id = $_SESSION['mem_id'];
                $sql = "SELECT * FROM membership where mem_id = '$id'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                 
                    while($row = mysqli_fetch_assoc($result)) {     
                       echo ' <div><br>
                               <p>Membership ID: '.$row["mem_id"].'</p>
                               <p>Username: '.$row["username"].'</p>
                               <p>Fullname: '.$row["fname"].' '.$row["lname"].'</p>
                               <p>Address: '.$row["address"].'</p>
                               <p>Contact: '.$row["contact"].'</p>
                               <p>Password: '.$row["password"].'</p>
                              </div> ';          
                             
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