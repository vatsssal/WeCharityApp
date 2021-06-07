<!DOCTYPE html>
<?php
   session_start();
   ?>  
<html lang="en">
   <head>
      <title>WeCharity|Index</title>
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
      <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="css/icomoon.css">
      <link rel="stylesheet" href="css/loader.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/login.css">
      <style>
         p{
         font-size:20px;display: -webkit-box;
         -webkit-line-clamp: 4;
         -webkit-box-orient: vertical;
         overflow: hidden;
         text-overflow: ellipsis;
         }
      </style>
   </head>
   <body>
      <div id="loader"></div>
      <?php
         include'menu.php';
          ?>
      <div class="hero-wrap" style="background-image: url('images/bg-9.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
               <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                  <h1 style="font-family: arial narrow;"class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We Care, We Charity.</h1>
                  <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></p>
               </div>
            </div>
         </div>
      </div>
      <section class="ftco-counter ftco-intro" id="section-counter">
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
                        <span>Charities in the world</span>
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
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section bg-light">
         <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
               <div class="col-md-7 heading-section ftco-animate text-center">
                  <h2 class="mb-4">Most Needed Charities</h2>
               </div>
            </div>
            <div class="row">
               <?php
                  $sql=$link->rawQuery("select * from charity order by charity_target DESC LIMIT 3");
                  if($link->count>0)
                  {
                  	foreach($sql as $fet)
                  	{
                  		if($fet['isactive']==1)
                  		{
                  			?>
               <div class="col-md-4 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch">
                     <a href="blog-single.html" class="block-20" style="background-image: url('admin/images/charity_img/<?=$fet['charity_image'];?>');">
                     </a>
                     <div class="text p-4 d-block">
                        <div class="meta mb-3">
                        </div>
                        <h3 class="heading mb-4"><a href="#"><?=$fet['charity_name'];?></a></h3>
                        <p><?=$fet['charity_description'];?></p>
                        <div class="progress custom-progress-success">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo 100*$fet['charity_achieved_target']/$fet['charity_target'];?>%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="fund-raised d-block"><?=$fet['charity_achieved_target'];?> raised of <?=$fet['charity_target'];?></span>
                        <a href="charity_single.php?id=<?=$fet['charity_id']?>">Contribute</a>
                     </div>
                  </div>
               </div>
               <?php
                  }
                  }
                  
                  }
                  ?>
            </div>
         </div>
      </section>
      <section class="ftco-section bg-light">
         <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
               <div class="col-md-5 heading-section ftco-animate text-center">
                  <h2 class="mb-4">Our Causes</h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 ftco-animate">
                  <div class="carousel-cause owl-carousel">
                     <?php
                        $sql=$link->rawQuery("select * from charity");
                        if($link->count>0)
                        {
                        	foreach($sql as $char)
                        	{
                        		if($char['isactive']==1)
                        		{
                        ?>
                     <div class="item">
                        <div class="cause-entry">
                           <a href="#" class="img" style="background-image: url(admin/images/charity_img/<?=$char['charity_image'];?>);"></a>
                           <div class="text p-3 p-md-4">
                              <h3><a href="#"><?php echo $char['charity_name']?></a></h3>
                              <p><?=$char['charity_description'];?></p>
                              <div class="progress custom-progress-success">
                                 <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo 100*$char['charity_achieved_target']/$char['charity_target'];?>%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="fund-raised d-block"><?=$char['charity_achieved_target'];?> raised of <?=$char['charity_target'];?></span>
                              <a href="charity_single.php?id=<?=$char['charity_id']?>">Contribute</a>
                           </div>
                        </div>
                     </div>
                     <?php
                        }
                        }
                        }
                        ?>
                  </div>
               </div>
            </div>
         </div>
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
      <section class="ftco-gallery">
         <div class="d-md-flex">
            <a href="images/cause-2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-2.jpg);">
               <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search"></span>
               </div>
            </a>
            <a href="images/cause-3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-3.jpg);">
               <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search"></span>
               </div>
            </a>
            <a href="images/cause-4.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-4.jpg);">
               <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search"></span>
               </div>
            </a>
            <a href="images/cause-5.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-5.jpg);">
               <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search"></span>
               </div>
            </a>
         </div>
         <div class="d-md-flex">
            <a href="images/cause-6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-6.jpg);">
               <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search"></span>
               </div>
            </a>
            <a href="images/image_3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_3.jpg);">
               <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search"></span>
               </div>
            </a>
            <a href="images/image_1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_1.jpg);">
               <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search"></span>
               </div>
            </a>
            <a href="images/image_2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_2.jpg);">
               <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search"></span>
               </div>
            </a>
         </div>
      </section>
      <section class="ftco-section bg-light">
         <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
               <div class="col-md-5 heading-section ftco-animate text-center">
                  <h2 class="mb-4">Our Blogs</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 ftco-animate">
                  <div class="carousel-cause owl-carousel">
                     <?php
                        $sql=$link->rawQuery("select * from blog");
                        if($link->count > 0)
                        {
                        foreach($sql as $data)
                        {
                        	?>
                     <div class="item">
                        <div class="cause-entry">
                           <a href="#" class="img" style="background-image: url(admin/images/blogs_img/<?=$data['blog_image'];?>);"></a>
                           <div class="text p-3 p-md-4">
                              <a href="blog-single.php?id=<?=$data['blog_id']?>">
                                 <h3><?php echo $data['blog_title']; ?></h3>
                                 <p>
                                    <?php echo $data['blog_content']; ?>
                                 </p>
                                 <span class="donation-time mb-3 d-block">Created On <?=date('F jS,Y',strtotime($data['blog_created_at']))?></span>
                                 <p>Read More <i class="ion-ios-arrow-forward"></i>
                              </a>
                              </p>
                           </div>
                        </div>
                     </div>
                     <?php
                        }
                        }
                        ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
         <div class="overlay"></div>
         <div class="container">
            <div class="row d-md-flex">
               <div class="col-md-6 d-flex ftco-animate">
                  <div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.jpg);"></div>
               </div>
               <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                  <h3 class="mb-3">Contact Us</h3>
                  <form action="contact_php.php" class="volunter-form" method="POST">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="contact_name">
                     </div>
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email" name="contact_email">
                        <textarea name="contact_query" id="" cols="30" rows="3" class="form-control" placeholder="Message"  ></textarea>
                     </div>
                     <div class="form-group">
                     </div>
                     <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <?php
         include 'footer.php';
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
      <script type="text/javascript" src="js/jquery.validate.js"></script>
      <script type="text/javascript" src="js/jquery.validate.min.js"></script>
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