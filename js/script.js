  
$(document).ready(function(){
  $('#username').keyup(function(){ // Keyup function for check the user action in input
    var username = $(this).val(); // Get the username textbox using $(this) or you can use directly $('#username')
    var UsernameAvailResult = $('#username_avail_result'); // Get the ID of the result where we gonna display the results
    var regex=/^[a-z][a-z0-9]{3,19}$/;
    if(username.length > 2) { // check if greater than 2 (minimum 3)
     /** UsernameAvailResult.html('Loading..'); // Preloader, use can use loading animation here
      $.post("username_check.php", {username: username}, function(data, status){
         UsernameAvailResult.html(data);
      });
      */
      
      var UrlToPass = 'action=username_availability&username='+username;
      $.ajax({ // Send the username val to another checker.php using Ajax in POST menthod
      type : 'POST',
      data : UrlToPass,
      url  : 'username_check.php',
      success: function(responseText){ // Get the result and asign to each cases
           if(responseText=="Available")
           {
            if(regex.test(username))
            {
                              UsernameAvailResult.html(responseText);

                        document.getElementById("button").disabled = false;

                 }
                    else
                    {
                                      UsernameAvailResult.html("");

                        document.getElementById("button").disabled = true;

                    }
        }
          else
          {
         UsernameAvailResult.html(responseText);
          document.getElementById("button").disabled = true;

          }
      }
    })
    }

    
    
    else{
      UsernameAvailResult.html('Enter atleast 3 characters');
    }
    if(username.length == 0) {
      UsernameAvailResult.html('');
    }
  });
  
  $('#password, #username').keydown(function(e) { // Dont allow users to enter spaces for their username and passwords
    if (e.which == 32) {
      return false;
      }
  });
  $('#password').keyup(function() { // As same using keyup function for get user action in input
    var PasswordLength = $(this).val().length; // Get the password input using $(this)
    var PasswordStrength = $('#password_strength'); // Get the id of the password indicator display area
    
    if(PasswordLength <= 0) { // Check is less than 0
      PasswordStrength.html(''); // Empty the HTML
      PasswordStrength.removeClass('normal weak strong verystrong'); //Remove all the indicator classes
    }
    if(PasswordLength > 0 && PasswordLength < 4) { // If string length less than 4 add 'weak' class
      PasswordStrength.html('weak');
      PasswordStrength.removeClass('normal strong verystrong').addClass('weak');
    }
    if(PasswordLength > 4 && PasswordLength < 8) { // If string length greater than 4 and less than 8 add 'normal' class
      PasswordStrength.html('Normal');
      PasswordStrength.removeClass('weak strong verystrong').addClass('normal');      
    } 
    if(PasswordLength >= 8 && PasswordLength < 12) { // If string length greater than 8 and less than 12 add 'strong' class
      PasswordStrength.html('Strong');
      PasswordStrength.removeClass('weak normal verystrong').addClass('strong');
    }
    if(PasswordLength >= 12) { // If string length greater than 12 add 'verystrong' class
      PasswordStrength.html('Very Strong');
      PasswordStrength.removeClass('weak normal strong').addClass('verystrong');
    }
  });
});
