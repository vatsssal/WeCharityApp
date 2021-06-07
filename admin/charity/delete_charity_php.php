<?php	
	include'../include/connect.php'; 
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
		}
	$sql = $link->rawQueryOne("select * from charity where charity_id=?",array($id));

	$img_unlink = "../images/charity_img/".$sql['charity_image'];

	unlink($img_unlink);

		$link->where("charity_id",$id);
		$sql=$link->delete("charity");
	
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