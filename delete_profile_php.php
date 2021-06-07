<?php	
	include'connect.php'; 
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
		}
		$link->where("user_id",$id);
		$sql=$link->delete("user");
	if($sql)
	{
		header("location:index.php");
	}
	else
	{
		echo "fail";
		echo $link->getLastError();
	}
	
?>	