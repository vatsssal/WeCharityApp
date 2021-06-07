<?php	
	include'connect.php'; 
		if(isset($_GET['id']) AND isset($_GET['charity_id']))
		{
			$id=$_GET['id'];
			$charity_id=$_GET['charity_id'];
		}
		$link->where("charity_id",$charity_id);
		$sql=$link->delete("charity");
	if($sql)
	{
		header("location:causes.php");
	}
	else
	{
		echo "fail";
		echo $link->getLastError();
	}
	
?>	