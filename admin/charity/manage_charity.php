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
      <link rel="icon" type="image/png" href="../favicon.png" sizes="16x16">
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Manage Charity</title>
      <link rel="stylesheet" href="../css/loader.css">
      <!-- Bootstrap CSS -->
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
                  <div class="col-12">
                     <div class="QA_section">
                        <div class="white_box_tittle list_header">
                           <h4>Table</h4>
                           <div class="box_right d-flex lms_block">
                              <div class="serach_field_2">
                                 <div class="search_inner">
                                    <form Active="#">
                                       <div class="serach_field-area">
                                          <div class="search_inner">
                                    <form action="#">
                                    <div class="search_field">
                                    <input type="search" name="search" placeholder="Search here..." class="searchTerm"  <?php 
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
                                    <th scope="col">title</th>
                                    <th scope="col">Requested By</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">IMAGE</th>
                                    <th scope="col">Target</th>
                                    <th scope="col">Description</th>
                                    <th scope="col"></th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    include'../include/connect.php';
                                    if(isset($_GET['search']))
                                        {
                                            $search=$_GET['search'];
                                       
                                    $sql=$link->rawQuery("select * from charity 
                                            INNER JOIN charity_type ON charity.charity_type_id=charity_type.charity_type_id 
                                            INNER JOIN user ON charity.user_id=user.user_id
                                            where charity.charity_name LIKE '%$search%'
                                            OR charity_type.charity_type_name LIKE '%$search%' OR charity.charity_description LIKE '%$search%'
                                            OR charity.charity_achieved_target LIKE '%$search%'
                                            OR user.user_name LIKE '%$search%'");
                                         }
                                         else{
                                            $sql=$link->rawQuery("select * from charity INNER JOIN charity_type ON charity.charity_type_id=charity_type.charity_type_id
                                                 INNER JOIN user ON charity.user_id=user.user_id");
                                         }
                                        
                                    if($link->count>0)
                                    {
                                    foreach($sql as $data)
                                    {
                                    
                                    ?>
                                 <tr>
                                    <td><?=$data['charity_name'];?></td>
                                    <td><?=$data['user_name'];?></td>
                                    <td><?=$data['charity_type_name'];?></td>
                                    <td><img style="max-width:100px;border: 1px solid #ddd;
                                       border-radius: 4px;
                                       padding: 5px;" alt="NO IMAGE"src="../images/charity_img/<?=$data['charity_image'];?>"?>
                                    </td>
                                    <td><?=$data['charity_target'];?></td>
                                    <td><?=$data['charity_description'];?></td>
                                    <td><a href="edit_charity.php?id=<?=$data['charity_id'];?>"><button type="button" name="edit" class="btn btn-primary">Edit</button></a></td>
                                    <td><a href="delete_charity_php.php?id=<?=$data['charity_id'];?>"><button type="button" name="delete" class="btn btn-danger">Delete</button></a></td>
                                    <?php
                                       if($data['isactive']==0)
                                       {
                                        ?>
                                    <td>
                                       <a href="accept_charity_php.php?id=<?=$data['charity_id'];?>"><button type="button" name="Accept" class="btn btn-secondary">Pending</button></a>
                                    </td>
                                    <?php
                                       }
                                       else
                                       {
                                        ?>
                                    <td>
                                       <a href="deny_charity_php.php?id=<?=$data['charity_id'];?>"><button type="button" name="Deny" class="btn btn-success">Accepted</button></a>
                                    </td>
                                    <?php
                                       }
                                         ?>
                                    <?php
                                       }
                                       }
                                         ?>
                                 </tr>
                              </tbody>
                              <tbody>
                                 <?php 
                                    if(isset($_GET['search']))
                                    {
                                        $search=$_GET['search'];
                                    
                                    $sql=$link->rawQuery("select * from charity 
                                        INNER JOIN charity_type ON charity.charity_type_id=charity_type.charity_type_id 
                                        
                                        where charity.charity_name LIKE '%$search%'
                                        OR charity_type.charity_type_name LIKE '%$search%' OR charity.charity_description LIKE '%$search%'
                                        OR charity.charity_achieved_target LIKE '%$search%'");
                                     }
                                     else{
                                        $sql=$link->rawQuery("select * from charity INNER JOIN charity_type ON charity.charity_type_id=charity_type.charity_type_id
                                             where admin_id=1");
                                     }
                                    
                                    if($link->count>0)
                                    {
                                        foreach($sql as $data)
                                        {
                                            
                                    ?>
                                 <tr>
                                    <td><?=$data['charity_name'];?></td>
                                    <td>Admin</td>
                                    <td><?=$data['charity_type_name'];?></td>
                                    <td><img style="max-width:100px;border: 1px solid #ddd;
                                       border-radius: 4px;
                                       padding: 5px;"src="../images/charity_img/<?=$data['charity_image'];?>"?>
                                    </td>
                                    <td><?=$data['charity_target'];?></td>
                                    <td><?=$data['charity_description'];?></td>
                                    <td><a href="edit_charity.php?id=<?=$data['charity_id'];?>"><button type="button" name="edit" class="btn btn-primary">Edit</button></a></td>
                                    <td><a href="delete_charity_php.php?id=<?=$data['charity_id'];?>"><button type="button" name="delete" class="btn btn-danger">Delete</button></a></td>
                                    <td><?php
                                       if($data['isactive']==0)
                                       {
                                           ?>
                                       <a href="accept_charity_php.php?id=<?=$data['charity_id'];?>"><button type="button" name="Accept" class="btn btn-secondary">Pending</button></a>
                                       <?php
                                          }
                                          else
                                          {
                                              ?>
                                       <a href="deny_charity_php.php?id=<?=$data['charity_id'];?>"><button type="button" name="Deny" class="btn btn-success">Accepted</button></a>
                                       <?php
                                          }
                                          ?>
                                    </td>
                                    <?php
                                       }
                                       }
                                       ?>
                                 </tr>
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
      <!-- active_chart js -->
      <script src="../js/active_chart.js"></script>
   </body>
</html>