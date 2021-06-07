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
      <meta charset="utf-8" />
      <link rel="icon" type="image/png" href="../favicon.png" sizes="16x16">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Edit Charity</title>
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
         <!-- menu  
            <div class="container-fluid no-gutters">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="header_iner d-flex justify-content-between align-items-center">
                            <div class="sidebar_icon d-lg-none">
                                <i class="ti-menu"></i>
                            </div>
                            <div class="serach_field-area">
                                    <div class="search_inner">
                                        <form action="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search here..." >
                                            </div>
                                            <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                        </form>
                                    </div>
                                </div>
                            <div class="header_right d-flex justify-content-between align-items-center">
                                <div class="header_notification_warp d-flex align-items-center">
                                    <li>
                                        <a href="#"> <img src="img/icon/bell.svg" alt=""> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <img src="img/icon/msg.svg" alt=""> </a>
                                    </li>
                                </div>
                                <div class="profile_info">
                                    <img src="img/client_img.png" alt="#">
                                    <div class="profile_info_iner">
                                        <p>Welcome Admin!</p>
                                        <h5>Travor James</h5>
                                        <div class="profile_info_details">
                                            <a href="#">My Profile <i class="ti-user"></i></a>
                                            <a href="#">Settings <i class="ti-settings"></i></a>
                                            <a href="#">Log Out <i class="ti-shift-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             menu  -->
         <div class="main_content_iner ">
            <div class="container-fluid plr_30 body_white_bg pt_30">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="white_box mb_30">
                        <div class="box_header ">
                           <div class="main-title">
                              <h2 class="mb-0">Update Charity</h2>
                           </div>
                        </div>
                        <?php include'../include/connect.php'; 
                           if(isset($_GET['id']))
                           {
                            $id=$_GET['id'];
                           }
                            $sql=$link->rawQuery("select * from charity where charity_id=$id");
                            if($link->count>0)
                            {
                                    foreach($sql as $a)
                                    {
                                    ?>
                        <form method="POST" action="edit_charity_php.php" enctype="multipart/form-data">
                           <input type="hidden" name="charity_id" value="<?php echo $id; ?>">
                           <div class="form-group">
                              <label>Charity Name</label>
                              <input type="text" value="<?=$a['charity_name'];?>"class="form-control" name="charity_name">
                           </div>
                           <label>Charity Type</label>
                           <select class="form-control form-control-md mb_30" name="charity_type_id">
                              <?php 
                                 $id=$_GET['$id'];
                                 
                                    $sql=$link->rawQuery("select * from charity_type");
                                    if($link->count>0)
                                    {
                                            foreach($sql as $b)
                                            {
                                            ?>
                              <option value="<?=$b['charity_type_id'];?>"><?php echo $b['charity_type_name'];?></option>
                              <?php
                                 }
                                 }
                                 ?>
                           </select>
                           <div class="form-group">
                              <label >Charity Target</label>
                              <input type="text" class="form-control" name="charity_target" value="<?=$a['charity_target'];?>">
                           </div>
                           <div class="form-group">
                              <label >Charity Description</label>
                              <textarea type="textarea"  rows="4" cols="50" class="form-control" name="charity_description"><?=$a['charity_description'];?></textarea>
                           </div>
                           <label>Add Image</label>
                           <div class="fallback">
                              <label class="form-control-label">Select Blog Image</label>
                              <input type="file" class="form-control" name="CharityImg" id="CharityImg">
                           </div>
                           <br> 
                           <br>
                           <input type="submit" value="Update"class="btn btn-primary btn-lg btn-block">
                        </form>
                        <?php
                           }
                           }
                           ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- footer part -->
         <div class="footer_part">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="footer_iner text-center">
                        <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Dashboard</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- main content part end -->
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
      <!-- <?php }?> -->
   </body>
   <!-- Mirrored from demo.dashboardpack.com/finance-html/Input_Selects.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Apr 2021 09:46:13 GMT -->
</html>