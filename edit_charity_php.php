<?php	
	include'connect.php'; 
	$charity_id=$_POST['charity_id'];
	$charity_name=$_POST['charity_name'];
	$charity_type_id=$_POST['charity_type_id'];
	$charity_target=$_POST['charity_target'];
	$charity_description=$_POST['charity_description'];

	$link->where("charity_id",$charity_id);
	$upd=$link->update("charity",array("charity_name"=>$charity_name,"charity_type_id"=>$charity_type_id,"charity_target"=>$charity_target,"charity_description"=>$charity_description));
	if($upd)
	{
		header("location:causes.php");	
	}
		$img = $_FILES['CharityImg']['name'];
		if($img != NULL)
		{
			$sql = $link->rawQueryOne("select * from charity where charity_id=?",array($charity_id));

			$img_unlink = "admin/images/charity_img/".$sql['charity_image'];

			unlink($img_unlink);
			
			//Image Upload code start
			
			$ext = pathinfo($img,PATHINFO_EXTENSION);
			$pimage = "CharityImg".$charity_id.'.'.$ext;		
	
		
			if(move_uploaded_file($_FILES['CharityImg']['tmp_name'],"admin/images/charity_img/".$pimage))
			{
				$link->where('charity_id',$charity_id);
				$a1=$link->update("charity",array("charity_image"=>$pimage));
				
				if($a1)
				{
					header("location:causes.php");
				}
			}
			//Image Upload code End
		}
?>