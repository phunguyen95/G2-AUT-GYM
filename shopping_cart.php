
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

    function runQuery($conn,$sql) {
        $result = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }       
        if(!empty($resultset))
            return $resultset;
    }

    if(isset($_GET["action"])) {
        switch($_GET["action"]) {
            case "add":
                if(isset($_POST["quantity"])) {
                    $id = $_GET['id'];
                    $productByCode = runQuery($conn, "SELECT * FROM products WHERE id = '$id'");
                    $itemArray = array($productByCode[0]["id"]=>array('name'=>$productByCode[0]["name"], 'id'=>$productByCode[0]["id"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
                    
                    if(isset($_SESSION["cart_item"])) {
                        if(in_array($productByCode[0]["id"],array_keys($_SESSION["cart_item"]))) {
                            foreach($_SESSION["cart_item"] as $k => $v) {
                                    if($productByCode[0]["id"] == $k) {
                                        if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                            $_SESSION["cart_item"][$k]["quantity"] = 0;
                                        }
                                        $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                                    }
                            }
                        }else {
                            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                        }
                    } else {
                        $_SESSION["cart_item"] = $itemArray;
                    }
                }
                break;

            case "remove":
                if(isset($_SESSION["cart_item"])) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                            if($_GET["id"] == $k)
                                unset($_SESSION["cart_item"][$k]);              
                            if(empty($_SESSION["cart_item"]))
                                unset($_SESSION["cart_item"]);
                    }
                }
                break;

            case "checkout":
               
                break;
        }
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
    <div class="about_banner_img"><img src="images/100.jpg" class="img-responsive" alt=""/></div>
    <div class="about_banner_wrap">
        <h1 class="m_11">Products</h1>
    </div>
    <div class="container">
        <div style="height: 30px;">&nbsp;</div>
        <h1>Your shopping cart</h1>

        <?php
            if(empty($_GET['action'])){
                echo "<h2>Your shopping cart is empty. <strong><a href='product.php'>Start shopping now!</a></strong></h2>";
            }else{
        ?>
            <div id="shopping-cart">
            <table cellpadding="10" cellspacing="1" style="width: 70%;">
            <tr style="height: 50px;">
                <th style="text-align:left;"><strong>Name</strong></th>
                <th style="text-align:left;"><strong>Code</strong></th>
                <th style="text-align:left;"><strong>Quantity</strong></th>
                <th style="text-align:left;"><strong>Price</strong></th>
                <th style="text-align:left;"><strong>Action</strong></th>
            </tr>   
            <?php    
              if (isset($_SESSION['cart_item'])) {
                     foreach ($_SESSION["cart_item"] as $item){
                        ?>
                            <tr>
                                <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
                                <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["id"]; ?></td>
                                <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
                                <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo "NZD $".$item["price"]; ?></td>
                                <td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><a href="shopping_cart.php?action=remove&id=<?php echo $item["id"]; ?>" class="btnRemoveAction">Remove Item</a></td>
                            </tr>
                            <?php
                            $item_total = 0;
                            $item_total += ($item["price"]*$item["quantity"]);
                        }
                     }else{
                        header("location:shopping_cart.php"); 
                     }   
               
                    ?>

                <tr>
                <td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
                </tr>
            </table>
            <div><a id="btnCheckout" href="checkout.php">Check out</a></div>
            <div><a id="btnEmpty" href="empty_cart.php">Empty Cart</a></div>
            <div><a href="product.php">Continue to Shopping</a></div>
        </div>
        <?php }; ?>
</div>
<div style="height: 70px;">&nbsp;</div>
<?php require "footer.php"; ?>
</body>
</html>