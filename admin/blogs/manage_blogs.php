<!DOCTYPE html>
 <?php
        session_start();
        if(!isset($_SESSION['username']))
        {
            header("location:../index.php");
        }
       
    ?>  
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../favicon.png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Manage Blogs</title>
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
                            <h4>Blogs</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form Active="#">
                                            <div class="serach_field-area">
                                            <div class="search_inner">
                                                <form action="#">
                                                    <div class="search_field">
                                                        <input type="search" name="search" placeholder="Search here..." class="searchTerm"
                                                         <?php 
                                                            if(isset($_GET['search']))
                                                            {
                                                                ?>value="<?php
                                                                echo trim($_GET['search']); 
                                                            }?>

                                                           ">
                                                    </div>
                                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt=""><i class="i i-search"></i> </button>
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
                                        <th scope="col">Title</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

								<?php 
                                include'../include/connect.php';
                                     if(isset($_GET['search']))
                                        {
                                            $search=$_GET['search'];
                                            $sql=$link->rawQuery("select * from blog where blog_title LIKE '%$search%' OR blog_content LIKE '%$search%'");
                                         }
                                         else{
									$sql=$link->rawQuery("select * from blog");
                                }
									if($link->count>0)
									{
										foreach($sql as $data)
										{
											
								?>
                                    <tr>
                                       <td style="width:200px;"><?=$data['blog_title'];?></td>
                                       <td><?=$data['blog_content'];?></td>
                                       <td><img alt="NO IMAGE" style="max-width:100px;border: 1px solid #ddd;
                                          border-radius: 4px;
                                          padding: 5px;" src="../images/blogs_img/<?=$data['blog_image'];?>"></td>
									   <td><a href="edit_blogs.php?id=<?=$data['blog_id'];?>"><button type="button" name="edit" class="btn btn-primary">Edit</button></a></td>
									   <td><a href="delete_blogs_php.php?id=<?=$data['blog_id'];?>"><button type="button" name="delete" class="btn btn-danger">Delete</button></a></td>
										
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

<!-- Mirrored from demo.dashboardpack.com/finance-html/data_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Apr 2021 09:46:13 GMT -->
</html>