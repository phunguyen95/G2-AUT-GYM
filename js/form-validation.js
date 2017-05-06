// Wait for the DOM to be ready

$(function() {
   $.validator.addMethod(
            "regex",
            function(value, element, regexp) 
            {
                if (regexp.constructor != RegExp)
                    regexp = new RegExp(regexp);
                else if (regexp.global)
                    regexp.lastIndex = 0;
                return this.optional(element) || regexp.test(value);
            },
            "Please check your input."
    );
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      fname:{
        required:true,
       regex: /^[a-z][a-z0-9]{3,19}$/,
      },   

        lname:{
        required:true,
       regex: /^[a-z][a-z0-9]{3,19}$/,
      },   
      username:{
        required:true,
       regex: /^[a-z][a-z0-9]{4,19}$/,
      },
      email: {
        required: true,


        // Specify that email should be validated
        // by the built-in "email" rule
        email: true,

      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      fname: {
        required: "Please enter first name",
        regex:"Please enter valid first name",
    },
      lname:
      {
        required: "Please enter last name",
        regex:"Please enter valid last name",
    },
      username:
      {
        required: "Please enter username",
        regex:"Please enter valid username",
    },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
  email: 
            {
                required: 'You must enter a email',
            },
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });

  
});