<?php
	session_start();
	include 'include/connect.php';
	$username=$_REQUEST['username'];
	$password=$_REQUEST['pwd'];
	
	$sql=$link->rawQueryOne("select * from admin where username=? AND password=?",array($username,$password));
	if($sql)
	{
			$id=$sql['user_id'];
			$_SESSION['username'] = "$username";
			$_SESSION['id'] = "$id";
			header("location:index/index.php");
		
	}
	else
	{
			?><script>alert("Incorrect ID/Password");
			window.location.href = "index.php";</script><?php
			
	}
?>