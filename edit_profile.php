<!DOCTYPE html>
<?php
        session_start();
        if(!isset($_SESSION['user_name']) AND isset($_SESSION['user_id'])==NULL)
        {
            
            header("location:login.html");
        }
       
    ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>user profile bio graph and total sales - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
@import url('https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&subset=greek-ext');

body{
	background-image: url("https://images.pexels.com/photos/891252/pexels-photo-891252.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
	background-position: center;
    background-origin: content-box;
    background-repeat: no-repeat;
    background-size: cover;
	min-height:100vh;
	font-family: 'Noto Sans', sans-serif;
}
.text-center{
	color:#fff;	
	text-transform:uppercase;
    font-size: 23px;
    margin: -50px 0 80px 0;
    display: block;
    text-align: center;
}
.box{
	position:absolute;
	left:50%;
	top:50%;
	transform: translate(-50%,-50%);
    background-color: rgba(0, 0, 0, 0.89);
	border-radius:3px;
	padding:70px 100px;
}
.input-container{
	position:relative;
	margin-bottom:25px;
}
.input-container label{
	position:absolute;
	font-weight:400;
	top:0px;
	left:0px;
	font-size:16px;
	color:#000;	
    pointer-event:none;
	transition: all 0.5s ease-in-out;
	margin:5px;
}
.input-container input{ 
  border:0;
  border-bottom:1px solid #555;  
  background:transparent;
  width:100%;
  padding:8px 0 5px 0;
  font-size:16px;
  color:#000;
}
.input-container input:focus{ 
 border:none;	
 outline:none;
 border-bottom:1px solid #e74c3c;	
}
.btn{
	color:#fff;
	background-color:#e74c3c;
	outline: none;
    border: 0;
    color: #fff;
	padding:10px 20px;
	text-transform:uppercase;
	margin-top:50px;
	border-radius:2px;
	cursor:pointer;
	position:relative;
}
/*.btn:after{
	content:"";
	position:absolute;
	background:rgba(0,0,0,0.50);
	top:0;
	right:0;
	width:100%;
	height:100%;
}*/
.input-container input:focus ~ label,
.input-container input:valid ~ label{
	top:-12px;
	font-size:12px;
	
}

	</style>
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body {
    color: #797979;
    background: #f1f2f7;
    font-family: 'Open Sans', sans-serif;
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
	font-family: "Dosis", Arial, sans-serif;
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
				?>
				
  <div class="profile-nav col-md-3">
      <div class="panel" style="border: none;">
	  <ul class="nav nav-pills nav-stacked">
              <li><a href="#"> <i class="fa fa-edit" style="color:white"></i> Edit profile</a></li>
          </ul>
          <div class="user-heading round">
              <a href="#">
                  <img  style="object-fit:cover;" src="admin/images/profile_img/<?=$user['user_pic'];?>" alt="">

              </a>
             <h1>User ID - <?=$user['user_id'];?></h1>
              <h1><?=$user['user_name'];?></h1>
              <p><?=$user['user_email'];?></p>

          </div>

          
      </div>
  </div>
  
  <div class="profile-info col-md-9">
  <form method="POST" action="edit_profile_php.php" enctype="multipart/form-data">
      <div class="panel" style="border: none;">
          <div class="bio-graph-heading">
              Doing Nothing is Not An Option of Our Life
          </div>
          <div class="panel-body bio-graph-info">
              <div class="row">
                  <div class="input-container col-md-6">		
				  <input type="hidden" name="user_id" value="<?php echo $id; ?>">
					<input type="text"  name="user_name" value="<?=$user['user_name'];?>"/>
					<label>Name</label>
				</div>
                  <div class="input-container col-md-6">		
					<input type="text" name="user_email" value="<?=$user['user_email'];?>"/>
					<label>Email</label>
				</div>
                  <div class="input-container col-md-6">		
					<input type="text" name="user_contact" value="<?=$user['user_contact'];?>"/>
					<label>Phone</label>
				</div>
                  <div class="input-container col-md-6">		
					<input type="password" name="user_password" value="<?=$user['user_password'];?>"/>
					<label>Psssword</label>
				</div>
                  <div class="input-container col-md-6">		
					<input type="text" name="user_address" value="<?=$user['user_address'];?>"/>
					<label>Address</label>
				</div>
                  <div class="input-container col-md-6">		
					<input type="text" name="user_pincode" value="<?=$user['user_pincode'];?>"/>
					<label>Pincode</label>
				</div>
                 <div class="fallback">
                <label>Update Profile Pic</label>
                    <label class="form-control-label"></label>
                    <input type="file" class="form-control" name="dp" id="dp">
                </div>  
				<center>
                  <button class="btn btn-primary" type="submit" style="width:97%;margin:0 0 30px 0;"><i class="fa fa-check" aria-hidden="true">&nbsp&nbspUPDATE PROFILE</i></button>
				  </center>
              </div>
          </div>
      </div>
  </form>
  <a href="delete_profile_php.php?id=<?=$user['user_id'];?>"><button class="btn btn-primary" style="width:100%;margin:0 0 30px 0px; background-color:#b20000;border: none;"><i class="fa fa-trash" aria-hidden="true"></i> &nbsp&nbspDelete Profile</button></a>
  </div>
  <?php
			}
			
		}
?>
</div>
</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>