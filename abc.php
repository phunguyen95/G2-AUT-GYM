<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="css/style2.css"/>
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/form-validation.js"></script>
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
   <form name="registration" action="" method="" >
 <strong> <h1 style="text-align: center;" class="text-info">Registration form</h1></strong>
        <label for="fname">First Name</label>
    <input type="text" name="fname"  placeholder="John"/>

    <label for="lname">Last Name</label>
    <input type="text" name="lname"  placeholder="Doe"/>

    <label for="username">Username</label>
    <input type="text" name="username"  placeholder="Doe"/>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="john@doe.com"/>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;"/>

    
      <hr>
      <div class="row">
           <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
           <button type="submit"  style="margin-left: 45%" class="btn btn-default regbutton">Register</button>
           
          </div>
                  
      </div>    
   <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6" style="margin-left: 18%">
<a href="index.html" class="btn btn-primary" role="button" style="width: 110%">Home page</a>
          </div> 
    </form>
</body>
<style>
body, html{
   background: url('http://farm3.staticflickr.com/2832/12303719364_c25cecdc28_b.jpg') fixed;
    background-size: cover;
    padding: 0;
    margin: 0;

}
.posted-by
{
    position: absolute;
    bottom: -10%;
    margin: 0 auto;
    color: #FFF;
    background-color: rgba(0, 0, 0, 0.66);
    padding: 10px;
    left: 25%;
}
.register-form{
    font-size: 16px;
   left: 50%;
    top: 50%;
    position: absolute;
    -webkit-transform: translate3d(-50%, -50%, 0);
    -moz-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);
}

.regbutton{    
    height: 50px;
    width: 200px;
    background-color:tomato;
    border-radius: 0px;
    font-size: 18px;
    color:white;
    border: none !important;
    margin-bottom: 5px;
}
.regbutton:hover{    
    color: white;
    background-color:#aa422f;
}
.regbutton:active{    
    color: white;
    background-color:#aa422f;
}
.logbutton{    
    height: 50px;
    width: 200px;
    background-color:yellowgreen;
    border-radius: 0px;
    font-size: 18px;
    color:white;
    border: none !important;
    margin-bottom: 5px;
}
.logbutton:hover{    
    color: white;
    background-color:darkolivegreen;
}
.logbutton:active{    
    color: white;
    background-color:darkolivegreen;
}



.register-form label{
    color: aliceblue;
    
}
.register-form input{
    margin-bottom: 5px;
    width: 430px;
    height: 40px;
    border-radius: 0px;
}

</style>
</html>