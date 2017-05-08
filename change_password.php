
<?php session_start();?>

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
<link rel="stylesheet" href="css/style-index.css">

<script type="application/x-javascript"> 
    addEventListener("load", function() { 
        setTimeout(hideURLbar, 0); 
    }, false); 
    function hideURLbar(){ window.scrollTo(0,1); } 
</script>

<!--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->
<script src="js/jquery.min.js"></script>


<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<style type="text/css">
    .add{
        height: 50px;
        color: white;
    }
</style>
<script type="text/javascript">
$(document).ready(function() {
    var frm = $('#resetform');
    frm.submit(function(e){
        e.preventDefault();

        var formData = frm.serialize();
        formData += '&' + $('#submit_btn').attr('name') + '=' + $('#submit_btn').attr('value');
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: formData,
            success: function(data){
                $('#message').html(data).delay(3000).fadeOut(3000);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('#message').html(textStatus).delay(2000).fadeOut(2000);
            }

        });
    });
});
</script>>
<!-- //grid-slider -->
</head>

<body>

<!-- start header_top -->
<div class="header">
   <div class="container">
      <div class="header-text" style="width: 500px;">
        <h3>Change Your Password</h3>
        <form name="resetform" action="changepass.php" id="resetform" class="passform" method="post" role="form">
            
            <br />
            <?php
            		        if(isset($_SESSION["username"])){

              echo '<input type="text" name="username" value="'.$_SESSION['username'].'"></input>'; 
          }

            ?>
            <label>Enter Old Password</label>
            <input type="password" class="form-control" name="old_password" id="old_password">
            <label>Enter New Password</label>
            <input type="password" class="form-control" name="new_password" id="new_password">
            <label>Confirm New Password</label>
            <input type="password" class="form-control"  name="con_newpassword"  id="con_newpassword" />
            <br>
            <input type="submit" class="btn btn-warning" name="password_change" id="submit_btn" value="Change Password" />
        </form>

        <!--display success/error message-->
        <div style="color: red;" id="message"></div>
   
        
         <?php
           require_once ('conf/setting.php');
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $id = $_SESSION['mem_id'];
            
    

        if (isset($_POST['password_change'])) {

            $username = strip_tags($_POST['username']);
            $password = strip_tags($_POST['old_password']);
            $newpassword = strip_tags($_POST['new_password']);
            $confirmnewpassword = strip_tags($_POST['con_newpassword']);

            // match username with the username in the database
            $sql = "SELECT * FROM membership WHERE mem_id = '$id' LIMIT 1";

            $query = $dbh->prepare($sql);
            $query->bindParam(1, $username, PDO::PARAM_STR);

            if($query->execute() && $query->rowCount()){
                $hash = $query->fetch();    
                if ($password == $hash['password']){
                    if($newpassword == $confirmnewpassword) {
                        $sql = "UPDATE membership SET password = ? WHERE mem_id = '$id'";

                        $query = $dbh->prepare($sql);
                        $query->bindParam(1, $newpassword, PDO::PARAM_STR);
                        $query->bindParam(2, $username, PDO::PARAM_STR);
                        if($query->execute()){
                            echo"<script>alert('Password Changed Successfully!');</script>";
                            echo"<script>window.location='profile.php';</script>";
                        }else{
                             echo"<script>alert('Password could not be updated');</script>";
                        }
                    } else {
                        echo"<script>alert('Passwords do not match!');</script>";
                    }
                }else{
                     echo"<script>alert('The current password accurately!');</script>";
                }
            }else{
                 echo"<script>alert('Incorrect username');</script>";
            }
        }

    ?>
      </div>
      <div class="header-arrow">
         <a href="#menu" class="class scroll"><span> </span> </a>
      </div>
    </div>

  </div>
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
            <li><a href="product.php">Shop</a></li>
            <li><a href="contact.php">Contact</a></li>
             <?php
                if(isset($_SESSION["lname"])){
                    echo '<li  class="active"><a href="#">Hi '.$_SESSION["lname"].'</a>
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
  <div class="testimonial">
        <div class="container">
            <i class="quot"> </i>
            <p>There is a different between INTEREST and COMMITMENT. When you are INTERESTED in doing something, you do it only when it is convienient. When you are COMMITTED to something, you accept no excuses, only results.</p>
            <p class="ceo">Quotation-<span class="ceo1">Kenneth Blanchard</span></p>
        </div>
    </div>
<!-- end header_top -->

<?php require "footer.php"; ?>
</body>
</html>