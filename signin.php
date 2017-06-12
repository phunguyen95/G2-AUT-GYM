<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link href="css/style-signin-form.css" rel='stylesheet' type='text/css' />
    
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
            </div>
            <div class="wrap">
                <p class="form-title">Sign In</p>
                <form method="post" action="login.php" class="login">
                    <input type="text" placeholder="Username" name="username" required />
                    <input type="password" placeholder="Password" name="password" required />
                    <input type="submit" value="Sign In" class="btn btn-success btn-sm" />
                    <div class="remember-forgot">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label><input type="checkbox" />Remember Me </label>
                                </div>
                            </div>

                            <div class="col-md-6 forgot-pass-content">
                                <a href="#" class="forgot-pass">Forgot Password</a>
                            </div>
                        </div>
                        <button type="submit" id="button"  style="margin-left: 5%" class="btn btn-default regbutton"><a href="signup.html">Register </a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="posted-by">Homepage::<a href="index.php">Homepage</a></div>
</div>

	<script>
	 $(document).ready(function () {
    $('.forgot-pass').click(function(event) {
      $(".pr-wrap").toggleClass("show-pass-reset");
    }); 
    
    $('.pass-reset-submit').click(function(event) {
      $(".pr-wrap").removeClass("show-pass-reset");
    }); 
});
	</script>
</body>
</html>