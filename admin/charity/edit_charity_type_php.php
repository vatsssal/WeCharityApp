<?php	
	include'../include/connect.php'; 
	
	$charity_type_id=$_REQUEST['charity_type_id'];
	$charity_type_name=$_REQUEST['charity_type_name'];
	$link->where("charity_type_id",$charity_type_id);
	$sql=$link->update("charity_type",array("charity_type_name"=>$charity_type_name));
	if($sql)
	{
		header("location:manage_charity_type.php");
	}
	else
	{
		echo "fail";
		echo $link->getLastError();
	}
	
?>	