<?php	
	include'../include/connect.php'; 
	$charity_id=$_REQUEST['charity_id'];
	$charity_name=$_REQUEST['charity_name'];
	$charity_type_id=$_REQUEST['charity_type_id'];
	$charity_target=$_REQUEST['charity_target'];
	$charity_description=$_REQUEST['charity_description'];

	$link->where("charity_id",$charity_id);
	$sql=$link->update("charity",array("charity_name"=>$charity_name,"charity_type_id"=>$charity_type_id,"charity_target"=>$charity_target,"charity_description"=>$charity_description));
	if($sql)
	{
	header("location:manage_charity.php");	
	}
		$img = $_FILES['CharityImg']['name'];
		if($img != NULL)
		{
			$sql = $link->rawQueryOne("select * from charity where charity_id=?",array($charity_id));

			$img_unlink = "../images/charity_img/".$sql['charity_image'];

			unlink($img_unlink);
			
			$ext = pathinfo($img,PATHINFO_EXTENSION);
			$pimage = "CharityImg".$charity_id.'.'.$ext;		
	
		
			if(move_uploaded_file($_FILES['CharityImg']['tmp_name'],"../images/charity_img/".$pimage))
			{
				$link->where('charity_id',$charity_id);
				$a1=$link->update("charity",array("charity_image"=>$pimage));
				
				if($a1)
				{
					header("location:manage_charity.php");
				}
			}
		}
?>