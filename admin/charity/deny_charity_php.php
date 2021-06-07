<?php	
	include'../include/connect.php'; 
	if(isset($_GET['id']))
		{
			$id=$_GET['id'];
		}
	$link->where("charity_id",$id);
	$sql=$link->update("charity",array("isactive"=>0));
	if($sql)
	{
		header("location:manage_charity.php");
	}
	else
	{
		echo "fail";
		echo $link->getLastError();
	}
	
?>	