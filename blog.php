<?php
   if(isset($_GET['page']))
   {
   	$page=$_GET['page'];
   }
   else
   {
   	$page=1;
   }
   $post_per_page=6;
   $result=($page-1)*$post_per_page;
   ?>
<!DOCTYPE html>
<?php
   session_start();
   ?>
<html lang="en">
   <head>
      <title>Blogs</title>
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
      <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="css/flaticon.css">
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
      <?php
         include'menu.php';
          ?>
      <div id="loader"></div>
      <div class="hero-wrap" style="background-image: url('images/bg-6.jpg');" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
               <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                  <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Causes</span></p>
                  <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blogs</h1>
               </div>
            </div>
         </div>
      </div>
      <div class="container" >
         <div class="row" >
            <div class="col-md-11">
               <form  method="get">
                  <input type="search" placeholder="Search.." name="search" style="width:102%;margin:50px 0 0 0;
                     border: 3px solid rgba(0, 0, 0, .2);border-radius: 30px;height: 55px;">
            </div>
            <div class="col-md-1" style="margin:50px 0 -50px 0;">
            <button type="submit"style="border-radius: 30px;"><i class="fa fa-search"></i></button>
            </form>
            </div>
         </div>
      </div>
      <section class="ftco-section">
         <div class="container">
            <div class="row">
               <?php
                  include 'connect.php';
                  if(isset($_GET['search']))
                  {
                  	$keyword=$_GET['search'];
                  	$sql=$link->rawQuery("select * from blog where blog_title LIKE '%$keyword%'order by blog_id DESC LIMIT $result,$post_per_page");
                  }
                  else{
                  	 $sql=$link->rawQuery("select * from blog order by blog_id DESC LIMIT $result,$post_per_page");
                  }
                  if($link->count>0)
                  {
                  	foreach($sql as $data)
                  	{
                  		?>
               <div class="col-md-4 ftco-animate">
                  <div class="cause-entry">
                     <a href="#" class="img" style="background-image: url(admin/images/blogs_img/<?=$data['blog_image'];?>);"></a>
                     <div class="text p-3 p-md-4">
                        <?=$data['blog_id'];?>
                        <h3><?=$data['blog_title'];?>
                        </h3>
                        <p><?=$data['blog_content'];?></p>
                        <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                        <a href="blog-single.php?id=<?=$data['blog_id']?>">Read More</a>
                     </div>
                  </div>
               </div>
               </a>
               <?php
                  }
                  }
                  ?>
            </div>
            <h1> <?php
               if(isset($_GET['search']))
               {
               	$keyword=$_GET['search'];
               	$sql=$link->rawQuery("select * from blog WHERE blog_title LIKE '%$keyword%'");
               	$total_pages=$link->count/$post_per_page;
               }
               else{
               	
               $sql=$link->rawQuery("select * from blog");
               $total_pages=$link->count/$post_per_page;
               }
               
                ?>
            </h1>
            <div class="row mt-5">
               <div class="col text-center">
                  <div class="block-27">
                     <ul>
                        <?php
                           // if($page>1)
                           // {
                           	// $switch="";
                           // }
                           // else{
                           	// $switch="disabled";
                           // }
                           // $for=$page+1;
                           ?>
                        <?php
                           for($page=1;$page<=$total_pages+1;$page++)
                           {
                           	?>
                        <li><a href="blog.php?page=<?=$page?>"><?=$page?>	</a></li>
                        <?php
                           }
                           ?>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php
         include'footer.php';
          ?>>
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