<?php	
	include'../include/connect.php'; 
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
		}
		$link->where("charity_type_id",$id);
		$sql=$link->delete("charity_type");
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