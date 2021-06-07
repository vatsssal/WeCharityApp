<?php
	session_start();
	include 'connect.php';
	$user_name=$_REQUEST['user_name'];
	$user_password=$_REQUEST['user_password'];
	
	$sql=$link->rawQueryOne("select * from user where user_name=? AND user_password=? AND user_active=?",array($user_name,$user_password,1));
	if($sql)
	{
			$user_id=$sql['user_id'];
			$_SESSION['user_id']="$user_id";
			$_SESSION['user_name'] = "$user_name";
			header("location:index.php");
	}
	else
	{
			?><script>alert("Incorrect ID/Password Or You've Been Blocked");
			window.location.href = "login.php";</script><?php
			
	}
?>