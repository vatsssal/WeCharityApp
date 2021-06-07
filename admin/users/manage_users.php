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
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Manage Patrons</title>
      <link rel="stylesheet" href="../css/loader.css">
      <link rel="icon" type="image/png" href="../favicon.png" sizes="16x16">
      <link rel="stylesheet" href="../css/bootstrap.min.css" />
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
      <div id="loader"></div>
      <!-- main content part here -->
      <!-- sidebar  -->
      <!-- sidebar part here -->
      <?php
         include'../include/sidebar.php';
         ?><!-- sidebar part end -->
      <!--/ sidebar  -->
      <section class="main_content dashboard_part">
         <div class="main_content_iner ">
            <div class="container-fluid plr_30 body_white_bg pt_30">
               <div class="row justify-content-center">
                  <div class="col-12">
                     <div class="QA_section">
                        <div class="white_box_tittle list_header">
                           <h4>Patrons</h4>
                           <div class="box_right d-flex lms_block">
                              <div class="serach_field_2">
                                 <div class="search_inner">
                                    <form action="#">
                                       <div class="search_field">
                                          <input type="search" name="search" placeholder="Search here..." class="searchTerm" 
                                             <?php 
                                                if(isset($_GET['search']))
                                                {
                                                    ?>value="<?php
                                                echo $_GET['search']; 
                                                }?>
                                             ">
                                       </div>
                                       <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="QA_table ">
                           <!-- table-responsive -->
                           <table class="table lms_table_active">
                              <thead>
                                 <tr>
                                    <th scope="col" style="width:90px;">Name</th>
                                    <th scope="col" style="width:90px;">Picture</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Contact</th>
                                    
                                    <th scope="col">Status</th>   
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php include'../include/connect.php';
                                    if(isset($_GET['search']))
                                       {
                                           $search=$_GET['search'];
                                           $sql=$link->rawQuery("select * from user where user_id LIKE '%$search%' OR user_name LIKE '%$search%' OR user_email LIKE '%$search%' OR user_contact LIKE '%$search%' OR user_address LIKE '%$search%'OR user_pincode LIKE '%$search%'");
                                        }
                                        else{
                                    $sql=$link->rawQuery("select * from user");
                                    }
                                    if($link->count>0)
                                    {
                                    foreach($sql as $users)
                                    {
                                    ?>
                                 <tr>
                                    <td><?=$users['user_name'];?></td>
                                    <td><img style="max-width:100px;border: 1px solid #ddd;
                                       border-radius:50px;
                                       object-fit:cover;x;
                                       padding: 5px;" alt="NO IMAGE" src="../images/profile_img/<?=$users['user_pic'];?>"></td>
                                    <td><?=$users['user_email'];?></td>
                                    <td><?=$users['user_password'];?></td>
                                    <td><?=$users['user_address'];?></td>
                                    <td><?=$users['user_contact'];?></td>
                                    
                                    <td>
                                    <?php
                                       if($users['user_active']==0)
                                       {
                                        ?>
                                    <a href="active_users_php.php?id=<?=$users['user_id'];?>"><button type="button" name="Accept" class="btn btn-secondary">Dectivated</button></a>
                                    <?php
                                       }
                                       else
                                       {
                                        ?>
                                    <a href="deactive_users_php.php?id=<?=$users['user_id'];?>"><button type="button" name="Deny" class="btn btn-success">Activated</button></a>
                                    <?php
                                       }
                                         ?>
                                      </td>
                                 </tr>
                                 <?php 
                                    }
                                    }
                                    ?>
                              </tbody>
                           </table>
                        </div>
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
      
      <script src="../js/active_chart.js"></script>
   
   </body>
</html>