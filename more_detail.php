<?php session_start();?>

<?php
    require_once ('conf/setting.php');
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>

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
<link rel="stylesheet" type="text/css" href="css/cart_style.css">
<script type="text/javascript" src="jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- //grid-slider -->
<!---calender-style---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script type="text/javascript" src="js/cart-js.js"></script>
<script type="text/javascript" src="rating.js"></script>
<script language="javascript" type="text/javascript">
$(function() {
    $("#rating_star").codexworld_rating_widget({
        starLength: '5',
        initialValue: '',
        callbackFunctionName: 'processRating',
        imageDirectory: 'images/',
        inputAttr: 'productID'
    });
});

function processRating(val, attrVal){
    //alert("value: "+val+" productID: "+attrVal);
    $.ajax({
        type: 'POST',
        url: 'rating.php',
        data: 'productID='+attrVal+'&ratingPoints='+val, 
        success : function() {
           alert('You have rated '+val+' to this product');
        }
    });
}
</script>
<style type="text/css">
    .codexworld_rating_widget{
        padding: 0px;
        margin: 0px;
        float: left;
    }
    .codexworld_rating_widget li{
        line-height: 0px;
        width: 28px;
        height: 28px;
        padding: 0px;
        margin: 0px;
        margin-left: 2px;
        list-style: none;
        float: left;
        cursor: pointer;
    }
    .codexworld_rating_widget li span{
        display: none;
    }

    .overall-rating{font-size: 14px;color: #8e8d8d;}
   
</style>

<!---//calender-style---->                
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
                                <li><a href="profile.php">View profile</a></li>
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
   
    <div class="about_banner_wrap">
       
    </div>
    <div class="container">
        <div style="height: 70px;">&nbsp;</div>
       <div style="float: right" >
          <a href="viewCart.php"><span id="cart_button">
            <img src="images/cart_icon.png">
            <input type="button" id="total_items" value="">
          </span></a>   
        </div>

        <div style="height: 70px"><a href="product.php"> << Back to Product page</a></div>
        <?php

            $id = $_GET['p'];
            $sql = "SELECT * FROM products WHERE id = '$id'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {

                    $query = "SELECT rating_number, FORMAT((total_points / rating_number),1) as average_rating FROM product_rating WHERE product_id = $id AND status = 1";
                    $result2 = mysqli_query($conn, $query);
                    $ratingRow = mysqli_fetch_assoc($result2);

                    echo   '<div style="width: 100%; height: 660px">
                                <div style="float: left; width: 45%;"><img src="'.$row["img"].'" class="img-responsive" alt="a" /></div>
                                <div style"float: left: width:5%">&nbsp;</div>
                                <div style="float: left: width:50%; text-align: justify;">
                                    <h2 id="'.$row["id"].'_name">'.$row["name"].'</h2>
                                    <br>
                                    <div class="overall-rating">(This product is ratting <span id="avgrat">'.$ratingRow['average_rating'].'</span>
                                    based on <span id="totalrat">'.$ratingRow['rating_number'].'</span> rating)</span></div>
                                    <br>
                                    <h3>
                                        <form method="POST" action="cartAction.php?action=addToCart&id='.$row["id"].'">
                                            <p class="btn-add">
                                                <i class="fa fa-shopping-cart"></i>
                                                <div><input type="submit" style="color: black" value="Add to cart" class="btnAddAction" /></div>
                                            </p> 
                                        </form>
                                    </h3>
                                    <br>
                                    <h2 id="'.$row["id"].'_price" class="price-text-color">NZD $'.$row["price"].'</h5>
                                    <b>Colour:</b> '.$row["colour"].'<br>
                                    <b>Description</b><br>
                                    <div>'.$row["description"].'<br><br>

                                    <input name="rating" value="0" id="rating_star" type="hidden" productID="'.$row["id"].'" />
                                   
                                   
                                </div>

                                <br>
                               

                            <div class="clearfix"></div>
                            </div>';
                }
            }else {
                echo "Up comming...";
            }
           

            
        ?>

    </div>
</div>
<div style="height: 70px;">&nbsp;</div>
<?php require "footer.php"; ?>
</body>
</html>