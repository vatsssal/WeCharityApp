<?php	
	include'../include/connect.php'; 
	if(isset($_GET['id']))
		{
			$id=$_GET['id'];
		}
	$link->where("user_id",$id);
	$sql=$link->update("user",array("user_active"=>1));
	if($sql)
	{
		header("location:manage_users.php");
	}
	else
	{
		echo "fail";
		echo $link->getLastError();
	}
	
?>	