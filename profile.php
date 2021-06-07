<!DOCTYPE html>
<?php
   session_start();
   if(!isset($_SESSION['user_name']) AND isset($_SESSION['user_id'])==NULL)
   {
       
       header("location:login.php");
   }
   
   ?>
<html lang="en">
   <head>
      <title>Profile</title>
      <meta charset="utf-8">
      <link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
      <title>user profile bio graph and total sales - Bootdey.com</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/loader.css">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <style type="text/css">
         body {
         color: #797979;
         background: #f1f2f7;
         font-family: system-ui;
         padding: 0px !important;
         margin: 0px !important;
         font-size: 13px;
         text-rendering: optimizeLegibility;
         -webkit-font-smoothing: antialiased;
         -moz-font-smoothing: antialiased;
         background-image: linear-gradient(to left bottom, #ffffff, #dcdcdc, #bababa, #9a9a9a, #7a7a7a);
         }
         a{
         font-size: large;
         color:black;
         }
         p {
         margin: 15px 0 15px 0;
         font-size:15px;
         color:black;
         }
         .profile-nav, .profile-info{
         margin-top:30px;   
         }
         .profile-nav .user-heading {
         background-image: linear-gradient(to right top, #197ed9, #1674ca, #136bbb, #1061ac, #0c589d);
         color: #fff;
         padding: 30px;
         text-align: center;
         }
         .profile-nav .user-heading.round a  {
         border-radius: 50%;
         -webkit-border-radius: 50%;
         border: 10px solid rgba(255,255,255,0.3);
         display: inline-block;
         }
         .profile-nav .user-heading a img {
         width: 112px;
         height: 112px;
         border-radius: 50%;
         -webkit-border-radius: 50%;
         }
         .profile-nav .user-heading h1 {
         font-size: 22px;
         font-weight: 300;
         margin-bottom: 5px;
         }
         .profile-nav .user-heading p {
         font-size: 12px;
         }
         .profile-nav ul {
         margin-top: 1px;
         }
         .profile-nav ul > li {
         border-bottom: 1px solid #ebeae6;
         margin-top: 0;
         line-height: 30px;
         }
         .profile-nav ul > li:last-child {
         border-bottom: none;
         }
         .profile-nav ul > li > a {
         border-radius: 0;
         -webkit-border-radius: 0;
         color: #fff;
         background-color: #fc3703;
         border-left: 5px solid #fff;
         }
         .profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
         background: #fff !important;
         border-left: 5px solid #1d94ff;
         color: #fc3703 !important;
         }
         .profile-nav ul > li:last-child > a:last-child {
         border-radius: 0 0 4px 4px;
         -webkit-border-radius: 0 0 4px 4px;
         }
         .profile-nav ul > li > a > i{
         font-size: 16px;
         padding-right: 10px;
         color: #bcb3aa;
         }
         .r-activity {
         margin: 6px 0 0;
         font-size: 12px;
         }
         .p-text-area, .p-text-area:focus {
         border: none;
         font-weight: 300;
         box-shadow: none;
         color: #c3c3c3;
         font-size: 16px;
         }
         .profile-info .panel-footer {
         background-color:#f8f7f5 ;
         border-top: 1px solid #e7ebee;
         }
         .profile-info .panel-footer ul li a {
         color: #7a7a7a;
         }
         .bio-graph-heading {
         background-image: linear-gradient(to right top, #197ed9, #1674ca, #136bbb, #1061ac, #0c589d);
         color: #fff;
         text-align: center;
         font-style: italic;
         padding: 40px 110px;
         font-size: 16px;
         font-weight: 300;
         }
         .bio-graph-info {
         color: #89817e;
         }
         .bio-graph-info h1 {
         font-size: 22px;
         font-weight: 300;
         margin: 0 0 20px;
         }
         .bio-row {
         width: 50%;
         float: left;
         margin-bottom: 10px;
         padding:0 15px;
         }
         .bio-row p span {
         width: 100px;
         display: inline-block;
         font-size:15px;
         }
         .bio-chart, .bio-desk {
         float: left;
         }
         .bio-chart {
         width: 40%;
         }
         .bio-desk {
         width: 60%;
         }
         .bio-desk h4 {
         font-size: 15px;
         font-weight:400;
         }
         .bio-desk h4.terques {
         color: #4CC5CD;
         }
         .bio-desk h4.red {
         color: #e26b7f;
         }
         .bio-desk h4.green {
         color: #97be4b;
         }
         .bio-desk h4.purple {
         color: #caa3da;
         }
         .file-pos {
         margin: 6px 0 10px 0;
         }
         .profile-activity h5 {
         font-weight: 300;
         margin-top: 0;
         color: #c3c3c3;
         }
         .summary-head {
         background: #ee7272;
         color: #fff;
         text-align: center;
         border-bottom: 1px solid #ee7272;
         }
         .summary-head h4 {
         font-weight: 300;
         text-transform: uppercase;
         margin-bottom: 5px;
         }
         .summary-head p {
         color: rgba(255,255,255,0.6);
         }
         ul.summary-list {
         display: inline-block;
         padding-left:0 ;
         width: 100%;
         margin-bottom: 0;
         }
         ul.summary-list > li {
         display: inline-block;
         width: 19.5%;
         text-align: center;
         }
         ul.summary-list > li > a > i {
         display:block;
         font-size: 18px;
         padding-bottom: 5px;
         }
         ul.summary-list > li > a {
         padding: 10px 0;
         display: inline-block;
         color: #818181;
         }
         ul.summary-list > li  {
         border-right: 1px solid #eaeaea;
         }
         ul.summary-list > li:last-child  {
         border-right: none;
         }
         .activity {
         width: 100%;
         float: left;
         margin-bottom: 10px;
         }
         .activity.alt {
         width: 100%;
         float: right;
         margin-bottom: 10px;
         }
         .activity span {
         float: left;
         }
         .activity.alt span {
         float: right;
         }
         .activity span, .activity.alt span {
         width: 45px;
         height: 45px;
         line-height: 45px;
         border-radius: 50%;
         -webkit-border-radius: 50%;
         background: #eee;
         text-align: center;
         color: #fff;
         font-size: 16px;
         }
         .activity.terques span {
         background: #8dd7d6;
         }
         .activity.terques h4 {
         color: #8dd7d6;
         }
         .activity.purple span {
         background: #b984dc;
         }
         .activity.purple h4 {
         color: #b984dc;
         }
         .activity.blue span {
         background: #90b4e6;
         }
         .activity.blue h4 {
         color: #90b4e6;
         }
         .activity.green span {
         background: #aec785;
         }
         .activity.green h4 {
         color: #aec785;
         }
         .activity h4 {
         margin-top:0 ;
         font-size: 16px;
         }
         .activity p {
         margin-bottom: 0;
         font-size: 13px;
         }
         .activity .activity-desk i, .activity.alt .activity-desk i {
         float: left;
         font-size: 18px;
         margin-right: 10px;
         color: #bebebe;
         }
         .activity .activity-desk {
         margin-left: 70px;
         position: relative;
         }
         .activity.alt .activity-desk {
         margin-right: 70px;
         position: relative;
         }
         .activity.alt .activity-desk .panel {
         float: right;
         position: relative;
         }
         .activity-desk .panel {
         background: #F4F4F4 ;
         display: inline-block;
         }
         .activity .activity-desk .arrow {
         border-right: 8px solid #F4F4F4 !important;
         }
         .activity .activity-desk .arrow {
         border-bottom: 8px solid transparent;
         border-top: 8px solid transparent;
         display: block;
         height: 0;
         left: -7px;
         position: absolute;
         top: 13px;
         width: 0;
         }
         .activity-desk .arrow-alt {
         border-left: 8px solid #F4F4F4 !important;
         }
         .activity-desk .arrow-alt {
         border-bottom: 8px solid transparent;
         border-top: 8px solid transparent;
         display: block;
         height: 0;
         right: -7px;
         position: absolute;
         top: 13px;
         width: 0;
         }
         .activity-desk .album {
         display: inline-block;
         margin-top: 10px;
         }
         .activity-desk .album a{
         margin-right: 10px;
         }
         .activity-desk .album a:last-child{
         margin-right: 0px;
         }
      </style>
   </head>
   <body>
      <div id="loader"></div>
      <a href="index.php"><i class="fa fa-home style=" aria-hidden="true" style="font-size: 4vw;margin: 0px 0px 0 60px;position: fixed;color:white;"></i></a>
      <div class="container bootstrap snippets bootdey" style="margin-top:60px;margin-left:10%;">
         <div class="row">
            <?php
               include'connect.php';
               $id=$_SESSION['user_id'];
               	$sql=$link->rawQuery("select * from user where user_id=$id");
               	if($link->count>0)
               	{
               		foreach($sql as $user)
               		{
                        if ($user['user_active']==1) 
                        {
                           // code...
                        
               			?>
            <div class="profile-nav col-md-3">
               <div class="panel" style="border: none;">
                  <ul class="nav nav-pills nav-stacked">
                     <li ><a href="#"> <i class="fa fa-user" style="color:white;"></i> Profile</a></li>
                  </ul>
                  <div class="user-heading round">
                     <a href="#">
                     <img style="object-fit:cover;" src="admin/images/profile_img/<?=$user['user_pic'];?>" alt="No Profile Pic">
                     </a>
                     <h1>User ID - <?=$user['user_id'];?></h1>
                     <h1><?=$user['user_name'];?></h1>
                     <p><?=$user['user_email'];?></p>
                  </div>
               </div>
            </div>
            <div class="profile-info col-md-9">
               <div class="panel" style="border: none;">
                  <div class="bio-graph-heading">
                     Doing Nothing is Not An Option of Our Life
                  </div>
                  <div class="panel-body bio-graph-info">
                     <div class="row">
                        <div class="bio-row">
                           <p><span>Full Name </span>: <?=$user['user_name'];?></p>
                        </div>
                        <div class="bio-row">
                           <p><span>Email </span>: <?=$user['user_email'];?></p>
                        </div>
                        <div class="bio-row">
                           <p><span>Contact </span>: <?=$user['user_contact'];?></p>
                        </div>
                        <div class="bio-row">
                           <p><span>Password</span>:******</p>
                        </div>
                        <div class="bio-row">
                           <p><span>Address </span>: <?=$user['user_address'];?></p>
                        </div>
                        <div class="bio-row">
                           <p><span>Pincode </span>: <?=$user['user_pincode'];?></p>
                        </div>
                        <center>
                           <a href="edit_profile.php"><button class="btn btn-primary" style="width:97%;margin:0 0 30px 0px;"><i class="fa fa-edit" aria-hidden="true"></i> &nbspEDIT PROFILE</button></a>
                        </center>
                        <center>
                           <a href="logout.php"><button class="btn btn-primary" style="width:97%;margin:0 0 30px 0px;"><i class="fa fa-edit" aria-hidden="true"></i> &nbspLOGOUT</button></a>
                        </center>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="panel">
                           <?php
                                          $sql=$link->rawQuery("select * from charity where user_id=$id");
                                          $count=$link->count;
                                          
                                          
                                          ?>
                           <a href="profile_charity.php?id=<?=$user['user_id'];?>">
                              <div class="panel-body">
                                 <div class="bio-chart">
                                    <div style="display:inline;width:100px;height:100px;">
                                       <canvas width="100" height="100px"></canvas>
                                       <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="<?=$count?>" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8" style="width: 100%  ; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -250px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 40px; line-height: normal; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;">
                                    </div>
                                 </div>
                                 <div class="bio-desk">
                                    <h4 class="red">Number of Charity Organized</h4>
                                    <p>Started : 15 July</p>
                                    <p>Deadline : 15 August</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="panel">
                           <?php
                                          $sql=$link->rawQueryOne("select * from user where user_id=$id");
                                          $donated=$sql['donated_amount'];
                                          ?>
                           <a href="profile_donated.php?id=<?=$user['user_id'];?>">
                              <div class="panel-body">
                                 <div class="bio-chart">
                                    <div style="display:inline;width:100px;height:100px;">
                                       <canvas width="100" height="100px"></canvas>
                                       <input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="<?=$donated?>" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8" style="width: 100%; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -250px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 40px; line-height: normal; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;">
                                    </div>
                                 </div>
                                 <div class="bio-desk">
                                    <h4 class="red">Number of Rupeed Donated</h4>
                                    <p>Started : 15 July</p>
                                    <p>Deadline : 15 August</p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php 
      }
      else
      {
         ?><h1>You've Been Blocked</h1><?php
         ?><a href="logout.php"><button class="btn btn-danger" style="width:100%">Logout</button></a><?php
      }
            }
            
            }?>
      </div>
      <script src="js/jquery-1.10.2.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/loader.js"></script>
      <script type="text/javascript"></script>
   </body>
</html>