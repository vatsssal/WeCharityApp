<!DOCTYPE html>
 <?php
        session_start();
        if(!isset($_SESSION['username']) AND isset($_SESSION['admin_id'])==NULL)
        {
            header("location:../index.php");
        }
       
    ?>  
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <link rel="icon" type="image/png" href="../favicon.png" sizes="16x16">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard</title>

    <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
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
    <div id="loader"></div>
<?php include '../include/sidebar.php'?>


<section class="main_content dashboard_part">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2"><img src="../img/logo.png" style="max-width:350px;margin-top:50px;"></div>
        <div class="col-md-2"><h2 style="max-width:350px;margin-top:120px;font-family: 'Brush Script MT', cursive;color:#D9671A;"> &nbsp&nbsp Admin</h2></div>
        <div class="col-md-4"></div>
    </div>
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="single_element">
                        <div class="quick_activity">
                            <div class="row">
                                <div class="col-12">
                                    <div class="quick_activity_wrap">
                                        <a href="../charity/manage_charity.php">
                                            <div class="single_quick_activity">
                                            <h4>Total Charity Organized</h4>
                                            <h3><span class=""><?php include'../include/connect.php';
																		$link->rawQueryONe("select * from charity");
																		echo $link->count;
											?></span> </h3>
                                        </div></a>
                                        <a href="../transactions/manage_transactions.php">
                                        <div class="single_quick_activity">
                                            <h4>Total Rupees Donated</h4>
                                            <h3>₹ <span class=""><?php $sql=$link->rawQueryOne("select sum(charity_amount) as sum from charity_donation");
																		echo $sql['sum'];?></span> </h3>
                                        </div>
                                        </a>
                                         <a href="../users/manage_users.php">
                                        <div class="single_quick_activity">
                                            <h4>Total Registered Patron</h4>
                                            <h3><span class=""><?php
                                                                        $link->rawQuery("select * from user");
                                                                        echo $link->count;
                                            ?></span> </h3>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- footer part -->
</section>
<!-- main content part end -->
<script src="../js/loader.js"></script>
<!-- footer  -->
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

<script src="../vendors/apex_chart/apexcharts.js"></script>

<!-- custom js -->
<script src="../js/custom.js"></script>

<!-- active_chart js -->
<script src="../js/active_chart.js"></script>
<script src="../vendors/apex_chart/radial_active.js"></script>
<script src="../vendors/apex_chart/stackbar.js"></script>
<script src="../vendors/apex_chart/area_chart.js"></script>
<!-- <script src="../vendors/apex_chart/pie.js"></script> -->
<script src="../vendors/apex_chart/bar_active_1.js"></script>
<script src="../vendors/chartjs/chartjs_active.js"></script>


</body>
</html>