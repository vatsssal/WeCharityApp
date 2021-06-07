<!DOCTYPE html>
<?php
   session_start();
   if(!isset($_SESSION['username']))
   {
       header("location:../index.php");
   }
   
   ?>  
<html lang="zxx">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <link rel="icon" type="image/png" href="../favicon.png" sizes="16x16">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Add Charity</title>
      <link rel="stylesheet" href="../css/loader.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../css/bootstrap.min.css" />
      <link rel="stylesheet" href="../css/drag.css" />
      <!-- themefy CSS -->
      <link rel="stylesheet" href="../vendors/themefy_icon/themify-icons.css" />
      <!-- swiper slider CSS -->
      <link rel="stylesheet" href="../vendors/swiper_slider/css/swiper.min.css" />
      <!-- select2 CSS -->
      <link rel="stylesheet" href="../vendors/select2/css/select2.min.css" />
      <!-- select2 CSS -->
      <link rel="stylesheet" href="../vendors/niceselect/css/nice-select.css" />
      <!-- owl carousel CSS -->
      <link rel="stylesheet" href="../vendors/owl_carousel/css/owl.carousel.css" />
      <!-- gijgo css -->
      <link rel="stylesheet" href="../vendors/gijgo/gijgo.min.css" />
      <!-- font awesome CSS -->
      <link rel="stylesheet" href="../vendors/font_awesome/css/all.min.css" />
      <link rel="stylesheet" href="../vendors/tagsinput/tagsinput.css" />
      <!-- datatable CSS -->
      <link rel="stylesheet" href="../vendors/datatable/css/jquery.dataTables.min.css" />
      <link rel="stylesheet" href="../vendors/datatable/css/responsive.dataTables.min.css" />
      <link rel="stylesheet" href="../vendors/datatable/css/buttons.dataTables.min.css" />
      <!-- text editor css -->
      <link rel="stylesheet" href="../vendors/text_editor/summernote-bs4.css" />
      <!-- morris css -->
      <link rel="stylesheet" href="../vendors/morris/morris.css">
      <!-- metarial icon css -->
      <link rel="stylesheet" href="../vendors/material_icon/material-icons.css" />
      <!-- menu css  -->
      <link rel="stylesheet" href="../css/metisMenu.css">
      <!-- style CSS -->
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/colors/default.css" id="colorSkinCSS">
   </head>
   <body class="crm_body_bg">
      <!-- main content part here -->
      <!-- sidebar  -->
      <!-- sidebar part here -->
      <?php
         include'../include/sidebar.php';
         ?><!-- sidebar part end -->
      <!--/ sidebar  -->
      <div id="loader"></div>
      <section class="main_content dashboard_part">
         <div class="main_content_iner ">
            <div class="container-fluid plr_30 body_white_bg pt_30">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="white_box mb_30">
                        <div class="box_header ">
                           <div class="main-title">
                              <h2 class="mb-0" >Add Charity</h2>
                           </div>
                        </div>
                        <form method="POST" action="add_charity_php.php" id="form" name="form" enctype="multipart/form-data">
                           <div class="form-group">
                              <label>Charity Name</label>
                              <input type="text" class="form-control" name="charity_name" id="charity_name" placeholder="Enter your charity title here.">
                           </div>
                           <label>Charity Type</label>
                           <select class="form-control form-control-md mb_30" name="charity_type_id" id="charity_type_id">
                              <?php include'../include/connect.php'; 
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
                              <label >Charity Target</label>
                              <input type="text" class="form-control" name="charity_target" id="charity_target" placeholder="Enter your charity Target in ₹.">
                           </div>
                           <div class="form-group">
                              <label >Charity Description</label>
                              <textarea type="textarea"  rows="4" cols="50" class="form-control" name="charity_description" placeholder="Enter your charity description."></textarea>
                           </div>
                           <label>Add Image</label>
                           <div class="fallback">
                              <label class="form-control-label">Select Blog Image</label>
                              <input type="file" class="form-control" name="CharityImg" id="CharityImg" required>
                           </div>
                           <br> 
                           <br>
                           <input type="submit" value="submit"class="btn btn-primary btn-lg btn-block">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- main content part end -->
      <footer>
         <script src="../js/jquery.min.js"></script>
         <script src="../js/jquery.validate.min.js"></script>
         <script src="../js/jquery.validate.js"></script>
         <script>
            //Form Validation
               $(document).ready( function () {
                   $("#form").validate( {
                       rules: {
                           charity_name: "required",
                           charity_target: "required",
                           user_email:
                           {
                             required: true,
                             email: true
                           },
                           charity_type_id:
                           {
                             required: true,
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
         <!-- footer  -->
         <script src="../js/loader.js"></script>
         <!-- jquery slim -->
         <script src="../js/jquery-3.4.1.min.js"></script>
         <!-- popper js -->
         <script src="../js/popper.min.js"></script>
         <script src="../js/drag.js"></script>
         <!-- bootstarp js -->
         <script src="../js/bootstrap.min.js"></script>
         <!-- sidebar menu  -->
         <script src="../js/metisMenu.js"></script>
         <!-- waypoints js -->
         <script src="../vendors/count_up/jquery.waypoints.min.js"></script>
         <!-- waypoints js -->
         <script src="../vendors/chartlist/Chart.min.js"></script>
         <!-- counterup js -->
         <script src="../vendors/count_up/jquery.counterup.min.js"></script>
         <!-- swiper slider js -->
         <script src="../vendors/swiper_slider/js/swiper.min.js"></script>
         <!-- nice select -->
         <script src="../vendors/niceselect/js/jquery.nice-select.min.js"></script>
         <!-- owl carousel -->
         <script src="../vendors/owl_carousel/js/owl.carousel.min.js"></script>
         <!-- gijgo css -->
         <script src="../vendors/gijgo/gijgo.min.js"></script>
         <!-- responsive table -->
         <script src="../vendors/datatable/js/jquery.dataTables.min.js"></script>
         <script src="../vendors/datatable/js/dataTables.responsive.min.js"></script>
         <script src="../vendors/datatable/js/dataTables.buttons.min.js"></script>
         <script src="../vendors/datatable/js/buttons.flash.min.js"></script>
         <script src="../vendors/datatable/js/jszip.min.js"></script>
         <script src="../vendors/datatable/js/pdfmake.min.js"></script>
         <script src="../vendors/datatable/js/vfs_fonts.js"></script>
         <script src="../vendors/datatable/js/buttons.html5.min.js"></script>
         <script src="../vendors/datatable/js/buttons.print.min.js"></script>
         <script src="../js/chart.min.js"></script>
         <!-- progressbar js -->
         <script src="../vendors/progressbar/jquery.barfiller.js"></script>
         <!-- tag input -->
         <script src="../vendors/tagsinput/tagsinput.js"></script>
         <!-- text editor js -->
         <script src="../vendors/text_editor/summernote-bs4.js"></script>
         <!-- custom js -->
         <script src="../js/custom.js"></script>
         <!-- active_chart js -->
         <!-- <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {?> -->
         <script src="../js/active_chart.js"></script>
      </footer>
      <!-- <?php }?> -->
   </body>
</html>