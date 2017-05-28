<?php session_start();?>
<?php
   require "config.php"; // MySQL connection string
   $mem_id = $_SESSION['mem_id'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Gym Website Template</title>
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<!-- //grid-slider -->
<!---calender-style-->    
<link rel="stylesheet" href="css/jquery-ui.css" />
<!---//calender-style-->				  
<script language="javascript" src="ajax.js"></script>

<style type="text/css">


    #wrapper { display: block; padding: 0; max-width: 960px; margin-top: 0px; }

    #core { display: block; max-width: 460px; font-family: 'lucida grande', tahoma, verdana, arial, sans-serif; margin-left: 30%; }

    .profileinfo { background: #f2f2f2; width: 100%; padding: 4px 10px; border-left: 1px solid #b3b3b3; border-right: 1px solid #b3b3b3; border-bottom: 1px solid #b3b3b3; }
    .profileinfo h2 { position: relative; left: -250px; }

    .gear { position: relative; display: block; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 1px solid #d9d9d9; }

    .gear a.editlink { position: absolute; right: 0; top: 13px; }

    .datainfo { margin-left: 10px; font-size: 15px; color: #333; }

    label { display: inline-block; font-weight: bold; color: #696969; font-size: 14px; width: 100px; }

    /** @group form inputs **/
    .hlite { background: #e2e8f6; border: 1px solid #bdc7d8; width: 250px; margin-left: -7px; padding: 4px 7px; color: #565656; font-size: 12px; }

    /** @group buttons **/
    .savebtn {background: #5972a8; font-size: 1.2em; cursor: pointer; border: 1px solid #1a356e; color: #fff; -webkit-box-shadow: inset 0 1px 0 #8a9cc2; -moz-box-shadow: inset 0 1px 0 #8a9cc2; box-shadow: inset 0 1px 0 #8a9cc2;
    }



</style>
<script language="JavaScript">
function edit_field(id){

var username_id='username_'+id; // To read the present mark from div 
var data_username='data_username'+ id;  // To assign id value to text box 

var password_id='password_'+id; // To read the present mark from div 
var data_password='data_password'+ id;  // To assign id value to text box 

var fname_id='fname_'+id;
var data_fname='data_fname'+ id;

var lname_id='lname_'+id;
var data_lname='data_lname'+ id;

var address_id='address_'+id;
var data_address='data_address'+ id;

var contact_id='contact_'+id;
var data_contact='data_contact'+ id;

var sid='s'+id;
var username=document.getElementById(username_id).innerHTML; // Read the present mark
document.getElementById(username_id).innerHTML = "<input type=text id='" +data_username + "' value='"+ username + "' size=2>"; // Display text input 

var password=document.getElementById(password_id).innerHTML; // Read the present mark
document.getElementById(password_id).innerHTML = "<input type=password id='" +data_password + "' value='"+ password + "' size=2>"; // Display text input 

var fname=document.getElementById(fname_id).innerHTML; // Read the present name
document.getElementById(fname_id).innerHTML = "<input type=text id='" +data_fname+ "' value='"+fname+ "'>"; // 

var lname=document.getElementById(lname_id).innerHTML; // Read the present name
document.getElementById(lname_id).innerHTML = "<input type=text id='" +data_lname+ "' value='"+lname+ "'>"; // 

var address=document.getElementById(address_id).innerHTML; // Read the present class
document.getElementById(address_id).innerHTML = "<input type=text id='" +data_address+ "' value='"+address+ "' >"; // 

var contact=document.getElementById(contact_id).innerHTML; // Read the present class
document.getElementById(contact_id).innerHTML = "<input type=text id='" +data_contact+ "' value='"+contact+ "' >"; // 

document.getElementById(sid).innerHTML = '<input type=button class="btn btn primary" value=Update onclick=ajax(' + id + ');>'; // Add different color to background
} // end of function

</script>

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
        <li><a href="product.php">Shop</a></li>
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
   
    <div class="about_banner_wrap">
	     
    </div>
  	<div class="container">
    <h2 style="height: 50px; text-align: center;">Your Profile</h2><br>
        <div class="row">
          <section id="core">
          
            <?php

               echo "<div id=\"msgDsp\" STYLE=\"position: absolute; right: 0px; top: 10px;left:2%;text-align:left; FONT-SIZE: 12px;font-family: Verdana;padding:0px;height:20px;width:250px;top:10px;z-index:1\"> </div>";
               
                $count = "SELECT * FROM membership where mem_id = '$mem_id'";
               
                foreach ($dbo->query($count) as $row) {

                $username_id='username_' . $row['mem_id'];  
                $password_id='password_' . $row['mem_id'];
                $fname_id='fname_' . $row['mem_id'];
                $lname_id='lname_' . $row['mem_id'];
                $address_id='address_' . $row['mem_id'];
                $contact_id='contact_' . $row['mem_id'];

                $sid='s' . $row['mem_id'];
                echo "<div class=\"gear\">
                        <label>Username:</label>
                        <span class=\"datainfo\" id=$username_id>$row[username]</span>
                      </div>
                      <div class=\"gear\">
                        <label>Firstname:</label>
                        <span class=\"datainfo\" id=$fname_id>$row[fname]</span>
                      </div>
                      <div class=\"gear\">
                        <label>Lastname:</label>
                        <span class=\"datainfo\" id=$lname_id>$row[lname]</span>
                      </div>
                      <div class=\"gear\">
                        <label>Address:</label>
                        <span class=\"datainfo\" id=$address_id>$row[address]</span>
                      </div>
                      <div class=\"gear\">
                        <label>Contact:</label>
                        <span class=\"datainfo\" id=$contact_id>$row[contact]</span>
                      </div>
                      <div class=\"gear\">
                        <label>Password:</label>
                        <span class=\"datainfo\" id=$password_id>$row[password]</span>
                      </div>
                      <div style=\"float: right\" id=$sid><input type=button value='Edit' onclick=edit_field($row[mem_id])></div>";

                }
               
            ?>

           
        </section>
                
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