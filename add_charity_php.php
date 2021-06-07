<?php	
session_start();
	include'connect.php';
	$user_id=$_SESSION['user_id'];
	$charity_name=$_REQUEST['charity_name'];
	$charity_type_id=$_REQUEST['charity_type_id'];
	$charity_target=$_REQUEST['charity_target'];
	$charity_description=$_REQUEST['charity_description'];
	$sql=$link->insert("charity",array("charity_name"=>$charity_name,"charity_type_id"=>$charity_type_id,"charity_target"=>$charity_target,"charity_description"=>$charity_description,"user_id"=>$user_id));
	if($sql)
	{
		$img = $_FILES['CharityImg']['name'];
		$ext = pathinfo($img,PATHINFO_EXTENSION);
		$pimage = "CharityImg".$sql.'.'.$ext;	

		if(move_uploaded_file($_FILES['CharityImg']['tmp_name'],"admin/images/charity_img/".$pimage))
			{
				$link->where('charity_id',$sql);
				$a1=$link->update("charity",array("charity_image"=>$pimage));
				
				if($a1)
				{
					?><script>alert("Your charity request has been submitted!");
					window.location.href = "causes.php";</script><?php
				}
			}		
	}
	else
	{
		echo "fail";
		echo $link->getLastError();
	}
	
?>



