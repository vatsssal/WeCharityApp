<!DOCTYPE html> 
<?php
   session_start();
   ?>
<html>
   <head>
      <title>Registration</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
      <link rel="stylesheet" href="css/demo.css">
      <link rel="stylesheet" href="css/sky-forms.css">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/loader.css">
      <link href="css/fontawesome-free/css/all.min.css" rel="stylesheet">
   </head>
   <body class="bg-cyan">
      <div id="loader"></div>
      <div class="body body-s">
         <form  action="registration_php.php" method="post" name="register" class="sky-form"
            name="registration" id="registration"enctype="multipart/form-data">
            <header>Registration form</header>
            <fieldset>
               <section>
                  <i class="fas fa-home"></i><a href="index.php">Home &gt </a> <a href="registration.php">Registration</a>
                  <label class="input">
                  <i class="icon-append icon-user"></i>
                  <input type="text" name="user_name" id="user_name" placeholder="username">
                  </label>
               </section>
               <section>
                  <label class="input">
                  <i class="icon-append icon-envelope-alt"></i>
                  <input type="text" name="user_email" id="user_email" placeholder="Email address">
                  </label>
               </section>
               <section>
                  <label class="input">
                  <i class="icon-append icon-lock"></i>
                  <input type="text" name="user_contact" id="user_contact" placeholder="Contact">
                  </label>
               </section>
               <section>
                  <label class="input">
                  <i class="icon-append icon-lock"></i>
                  <input type="password" name="user_password" id="user_password" placeholder="Password">
                  </label>
               </section>
               <section>
                  <label class="input">
                  <i class="icon-append icon-lock"></i>
                  <input type="password" name="user_cpassword" id="user_cpassword" placeholder="Confirm password">
                  </label>
               </section>
               <div class="row">
                  <section class="col col-6">
                     <label class="input">
                     <input type="text" name="user_address" id="user_address" placeholder="Address">
                     </label>
                  </section>
                  <section class="col col-6">
                     <label class="input">
                     <input type="text" name="user_pincode" id="user_pincode" placeholder="Pincode">
                     </label>
                  </section>
                  <label style="font-size: 15px;">Profile Pic :</label>
                  <div class="fallback">
                     <label class="form-control-label"></label>
                     <input type="file" class="form-control" name="dp" id="dp" required>
                  </div>
               </div>
            </fieldset>
            <fieldset>
            </fieldset>
            <footer>
               <a href="login.php" class="button button-secondary">Already a Patron?</a>
               <button type="submit" style="background-color: red;" id="submit" class="button">Submit</button>
            </footer>
         </form>
      </div>
   </body>
   <footer>
      <script src="js/jquery.min.js"></script>
      <script src="js/loader.js"></script>
      <script src="js/jquery.validate.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script>
         //Form Validation
             $(document).ready( function () {
                 $("#registration").validate( {
                     rules: {
                         user_name: "required",
                         user_password: "required",
                         user_email:
                         {
                           required: true,
                           email: true
                         },
                         user_contact:
                         {
                           required: true,
                           digits: true,
                           minlength: 10,
                           maxlength: 10
                         },
                         user_pincode:
                         {
                           required: true,
                           digits: true,
                         },
                         user_address: "required",
                         user_company: "required",
                         user_password: "required",
                         user_cpassword:
                         {
                           required: true,
                           equalTo: "#user_password"
                         },
                     },
                     messages: {
                         
                         user_name: "Please Enter Name *",
                         user_password: "Please Enter Password *",
                         user_email:
                         {
                           required: "Please Enter E-mail *",
                           email: "Please Enter Valid E-mail *",
                         },
                         user_contact:
                         {
                           required: "Please Enter Phone No. *",
                           digits: "Please Enter Only Digits *",
                           minlength: "Please Enter Only 10 Digits *",
                           maxlength: "Please Enter Only 10 Digits *"
                         },
                         user_pincode:
                         {
                           required: "Please Enter Pincode *",
                           digits: "Please Enter Only Digits *",
                           minlength: "Please Enter Only 6 Digits *",
                           maxlength: "Please Enter Only 6 Digits *"
                         },
                         user_address: "Please Enter Address *",
                         user_password: "Please Enter Password *",
                         user_cpassword:
                         {
                           required: "Please Enter Confirm Password *",
                           equalTo: "Both Password Not Match*"
                         },
                         
                     },
                     errorElement: "em",
                     errorPlacement: function ( error, element ) {
                         // Add the `invalid-feedback` class to the error element
                         error.addClass( "invalid-feedback" );
         
                         if ( element.prop( "type" ) === "checkbox" ) {
                             error.insertAfter( element.next("br") );
                         } else {
                             error.insertAfter( element );
                         }
                     },
                     highlight: function ( element, errorClass, validClass ) {
                         $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
                     },
                     unhighlight: function (element, errorClass, validClass) {
                         $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
                     }
                 } );
         
             } );
      </script>
   </footer>
</html>