
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
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
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
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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
            <li class="active"><a href="product.php">Shop</a>
            </li>
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
        <h1 class="m_11">Check Out</h1>
    </div>
    <?php
      if(isset($_POST['PayButton'])){
          echo '<script type="text/javascript">alert("Payment Successfully")</script>';
          session_start();  //start the session
          session_unset();  //unset all session variables 
          session_destroy();  //destroy all data associated with the session 
          header("location:shopping_cart.php");
      }

      if(isset($_POST['CancelButton'])){
          echo '<script type="text/javascript">alert("Order has been cancelled.")</script>';
          header("location:shopping_cart.php");
      }
    ?>
    <div class="container">
    <div style="height: 50px"></div>>
      <div id="Checkout" class="inline">
          <h1>Pay Invoice</h1>
          <form method="post" action="checkout.php">
              <div class="form-group">
                  <label for="PaymentAmount">Payment amount</label>
                  <div class="amount-placeholder">
                      <span>$</span>
                      
                  </div>
              </div>
              <div class="form-group">
                  <label or="NameOnCard">Name on card</label>
                  <input id="NameOnCard" class="form-control" type="text" maxlength="255"></input>
              </div>
              <div class="form-group">
                  <label for="CreditCardNumber">Card number</label>
                  <input id="CreditCardNumber" class="null card-image form-control" type="text"></input>
              </div>
              <div class="expiry-date-group form-group">
                  <label for="ExpiryDate">Expiry date</label>
                  <input id="ExpiryDate" class="form-control" type="text" placeholder="MM / YY" maxlength="7"></input>
              </div>
              <div class="security-code-group form-group">
                  <label for="SecurityCode">Security code</label>
                  <div class="input-container" >
                      <input id="SecurityCode" class="form-control" type="text" ></input>
                      <i id="cvc" class="fa fa-question-circle"></i>
                  </div>
                  <div class="cvc-preview-container two-card hide">
                      <div class="amex-cvc-preview"></div>
                      <div class="visa-mc-dis-cvc-preview"></div>
                  </div>
              </div>
              <div class="zip-code-group form-group">
                  <label for="ZIPCode">ZIP/Postal code</label>
                  <div class="input-container">
                      <input id="ZIPCode" class="form-control" type="text" maxlength="10"></input>
                      <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Enter the ZIP/Postal code for your credit card billing address."><i class="fa fa-question-circle"></i></a>
                  </div>
              </div>
              <button id="PayButton" name="PayButton" class="btn btn-block btn-success submit-button" type="submit">
                  <span class="submit-button-lock"></span>
                  <span class="align-middle">Pay Now</span>
              </button>
              <button id="CancelButton" name="CancelButton" class="btn btn-block btn-success submit-button" type="submit">
                  <span class="align-middle">Cancel order</span>
              </button>
          </form>
      </div>
</div>

<div style="height: 70px;">&nbsp;</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

<script src="js/index.js"></script>
<?php require "footer.php"; ?>
</body>
</html>