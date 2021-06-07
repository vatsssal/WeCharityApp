<!DOCTYPE html>
<?php
   session_start();
   if(!isset($_SESSION['user_name']))
   {
       header("location:login.php");
   }
   
   ?>  
<html lang="en">
   <head>
      <title>Add Charity</title>
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
      <link rel="stylesheet" href="css/drag.css">
      <link rel="stylesheet" href="css/loader.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/login.css">
      <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
   </head>
   <body>
      <?php include'menu.php';?>
      <div id="loader"></div>
      <div class="hero-wrap" style="background-image: url('images/bg-10.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
               <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                  <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Charity</span></p>
                  <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Organize a charity</h1>
               </div>
            </div>
         </div>
      </div>
      <section class="ftco-section contact-section ftco-degree-bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12 pr-md-5">
                  <h4 class="mb-4">Do you want to organize a charity??</h4>
                  <form method="POST" action="add_charity_php.php" id="form" name="form" enctype="multipart/form-data">
                     <div class="form-group">
                        <input type="text" class="form-control" name="charity_name" id="charity_name" placeholder="Enter your charity title here.">
                     </div>
                     <select class="form-control form-control-md mb_30" name="charity_type_id" id="charity_type_id">
                        <?php include'connect.php'; 
                           $sql=$link->rawQuery("select * from charity_type");
                           if($link->count>0)
                           {
                           		foreach($sql as $a)
                           		{
                           		?>
                        <option value=<?=$a['charity_type_id'];?>><?php echo $a['charity_type_name'];?></option>
                        <?php
                           }
                           }
                           ?>
                     </select>
                     <div class="form-group">
                        <input type="text" class="form-control" name="charity_target" id="charity_target" placeholder="Enter your charity Target in ₹.">
                     </div>
                     <div class="form-group">
                        <textarea type="textarea"  rows="4" cols="50" class="form-control" name="charity_description" placeholder="Enter your charity description."></textarea>
                     </div>
                     <div class="fallback">
                        <label class="form-control-label"></label>
                        <input type="file" class="form-control" name="CharityImg" id="CharityImg" required>
                     </div>
                     <br> 
                     <br>
                     <input type="submit" value="submit"class="btn btn-primary btn-lg btn-block">
                  </form>
               </div>
            </div>
         </div>
      </section>
   </body>
   <footer>
      <?php include'footer.php';?>
      <div id="ftco-loader" class="show fullscreen">
         <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
         </svg>
      </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery.validate.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script>
         //Form Validation
            $(document).ready( function () {
                $("#form").validate( {
                    rules: {
                        charity_name: "required",
                        charity_target: "required",
                       
                    },
                    messages: {
                        
                        charity_name: "Please Enter Name *",
                        charity_target: "Please Enter Charity Target *",
                        user_email:
                        {
                          required: "Please Enter E-mail *",
                          email: "Please Enter Valid E-mail *",
                        },
                        charity_type_id:
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
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/loader.js"></script>
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
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-23581568-13');
      </script>
      <script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"645ede0ad9e8de46","version":"2021.4.0","si":10}'></script>
   </footer>
</html>