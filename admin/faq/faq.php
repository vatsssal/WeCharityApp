<!DOCTYPE html>
 <?php
        session_start();
        if(!isset($_SESSION['username']))
        {
            header("location:../index.php");
        }
       
    ?>  
<html lang="zxx">


<!-- Mirrored from demo.dashboardpack.com/finance-html/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Apr 2021 09:46:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Finance</title>

    <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
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


<section class="main_content dashboard_part">
        <!-- menu  -->
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
    <!--/ menu  -->
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0" >Faq</h3>
                            </div>
                        </div>
                        <!-- accordian -->
                        <div class="accordion accordion_custom mb_50" id="accordion_ex">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Example 0
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion_ex">
                                    <div class="card-body">
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Example 1
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion_ex">
                                    <div class="card-body">
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Example 2
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion_ex">
                                    <div class="card-body">
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree3">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree3"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Example 3
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3"
                                    data-parent="#accordion_ex">
                                    <div class="card-body">
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree3">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree4"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Example 4
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseThree4" class="collapse" aria-labelledby="headingThree3"
                                    data-parent="#accordion_ex">
                                    <div class="card-body">
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree3">
                                    <h2 class="mb-0">
                                        <a href="#" class="btn collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree5"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Example 5
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseThree5" class="collapse" aria-labelledby="headingThree3"
                                    data-parent="#accordion_ex">
                                    <div class="card-body">
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.

                                            Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- accordian -->
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

<!-- Mirrored from demo.dashboardpack.com/finance-html/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Apr 2021 09:46:11 GMT -->
</html>