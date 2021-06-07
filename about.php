<!DOCTYPE html>
<?php
   session_start();
   ?>
<html lang="en">
   <head>
      <title>About Us</title>
      <meta charset="utf-8">
      <link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
      <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/aos.css">
      <link rel="stylesheet" href="css/ionicons.min.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="css/jquery.timepicker.css">
      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/icomoon.css">
      <link rel="stylesheet" href="css/loader.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/login.css">
      <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
   </head>
   <body>
      <?php include 'menu.php';?>
      <div id="loader"></div>
      <div class="hero-wrap" style="background-image: url('images/bg-7.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
               <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                  <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
                  <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
               </div>
            </div>
         </div>
      </div>
      <section class="ftco-section">
         <div class="container">
            <div class="row d-flex">
               <div class="col-md-6 d-flex ftco-animate">
                  <div class="img img-about align-self-stretch" style="background-image: url(images/bg_4.jpg); width: 100%;"></div>
               </div>
               <div class="col-md-6 pl-md-5 ftco-animate">
                  <h2 class="mb-4">Welcome to WeCharity</h2>
                  <p>WeCharity is a funds raising organization and charity partner. Our organization organises charities in India that operates collaborative programs.
                  <p/>
                  <p>Charities are facing the nightmare scenario of increased demand at a time of reduced income. This is likely to explain why half of all charities surveyed (49%) said they had sought or received some form of emergency grant funding to get them through the pandemic.</p>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-counter ftco-intro ftco-intro-2" id="section-counter">
         <div class="container">
            <div class="row no-gutters">
               <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 color-1 align-items-stretch">
                     <div class="text">
                        <span>Served Over</span>
                        <?php
                           include 'connect.php';
                           $link->rawQuery("select * from charity");
                        ?>
                        <strong class="number" data-number="<?=$link->count;?>">0</strong>
                        <span>Charities in 190 countries in the world</span>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 color-2 align-items-stretch">
                     <div class="text">
                        <h3 class="mb-4"></h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts.</p>
                        <a href="causes.php"><button style="background-color:white;color:orange;">Donate</button></a>  
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 color-3 align-items-stretch">
                     <div class="text">
                        <h3 class="mb-4"></h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts.</p>
                        <?php if(!isset($_SESSION['user_name']))
        {
                              ?>
                                 <a href="registration.php"><button style="background-color:white;color:orange;">Become a Patron</button></a>  
                           <?php
                           }
                        else if(isset($_SESSION['user_name']))
                        {
                              ?>
                              <a href="add_charrity.php"><button style="background-color:white;color:orange;">Add a Charity</button></a>  
                           <?php 
                           }
                        
                     ?>  
      </section>
      <section class="ftco-section bg-light">
      <h1>Latest Donations</h1>
         <div class="container">
            <div class="row">
            <?php

               $sql=$link->rawQuery("SELECT charity_donation.charity_id, charity.charity_name,user.user_name,charity_donation.charity_amount,user.user_pic   
               FROM charity_donation
               INNER JOIN charity
               ON charity_donation.charity_id = charity.charity_id
               INNER JOIN user
               ON user.user_id =charity_donation.user_id

               ORDER BY charity_donation.charity_id;");
                        if($link->count>0)
                        {
                           foreach($sql as $user)
                           {
                              ?> 
               
               <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                  <div class="staff">
                     <div class="d-flex mb-4">
                        <div class="img" style="background-image: url(admin/images/profile_img/<?=$user['user_pic'];?>);"></div>
                        <div class="info ml-4">
                           <h3><a href="teacher-single.html"><?=$user['user_name'];?></a></h3>
                           <div class="text">
                           <p>Donated <span><??></span> for <a href="charity_single.php?id=<?=$user['charity_id'];?>"><?=$user['charity_name'];?></a></p>
                              <p><span><??></span>  <a href="#"><?=$user['charity_amount'];?></a> ₹ Donated </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>  
         <?php
            }
         }
      ?>
               
         </div>
       
      </section>
      <?php
         include'footer.php';
         ?>
      <script src="js/jquery.min.js"></script>
      <script src="js/loader.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.animateNumber.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
      <script src="js/jquery.timepicker.min.js"></script>
      <script src="js/scrollax.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
      <script src="js/google-map.js"></script>
      <script src="js/main.js"></script>
      <script src="js/jquery.validate.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script type="text/javascript" src="../assets/js/jquery.validate.js"></script>
      <script type="text/javascript" src="../assets/js/jquery.validate.min.js"></script>
      <script>
         //Form Validation
             $( document ).ready( function () {
                 $( "#f-popup" ).validate( {
                     rules: {
                         name: "required",
                         pwd: "required",
                         email:
                         {
                           required: true,
                           email: true
                         },
                         user_phone:
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
                         user_add1: "required",
                         user_add2: "required",
                         privacy1: "required",
                         privacy2: 
                         {
                           equalTo: "#privacy1"
                         },
                         user_password: "required",
                         user_cpassword:
                         {
                           required: true,
                           equalTo: "#user_password"
                         },
                     },
                     messages: {
                         
                         name: "Please Enter Name *",
                         pwd: "Please Enter Password *",
                         email:
                         {
                           required: "Please Enter E-mail *",
                           email: "Please Enter Valid E-mail *",
                         },
                         user_phone:
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
                         user_add1: "Please Enter Address  *",
                         user_add2: "Please Enter Locality / Landmark *",
                         privacy1: "Please Accept Privacy Policy *",
                         privacy2:
                         {
                           equalTo: "Please Accept Privacy Policy *"
                         },
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
      <script>
         // If user clicks anywhere outside of the modal, Modal will close
         
         var modal = document.getElementById('modal-wrapper');
         window.onclick = function(event) {
         	if (event.target == modal) {
         		modal.style.display = "none";
         	}
         }
      </script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-23581568-13');
      </script>
      <script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"645ede0ad9e8de46","version":"2021.4.0","si":10}'></script>
   </body>
</html>