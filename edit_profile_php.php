<?php
	include'connect.php'; 
	echo $user_id=$_REQUEST['user_id'];
	echo $user_name=$_REQUEST['user_name'];
	echo $user_email=$_REQUEST['user_email'];
	echo $user_contact=$_REQUEST['user_contact'];
	echo $user_password=$_REQUEST['user_password'];
	echo $user_address=$_REQUEST['user_address'];
	echo $user_pincode=$_REQUEST['user_pincode'];
	$link->where("user_id",$user_id);
	$upd=$link->update("user",array("user_name"=>$user_name,"user_email"=>$user_email,"user_contact"=>$user_contact,"user_password"=>$user_password,"user_address"=>$user_address,"user_pincode"=>$user_pincode));
	if($upd)
	{
		header("location:profile.php?id=$user_id");
	}
	$img = $_FILES['dp']['name'];
		if($img != NULL)
		{
			$sql = $link->rawQueryOne("select * from user where user_id=?",array($user_id));

			$img_unlink = "admin/images/profile_img/".$sql['user_pic'];

			unlink($img_unlink);
			
			//Image Upload code start
			
			$ext = pathinfo($img,PATHINFO_EXTENSION);
			$pimage = "dp".$user_id.'.'.$ext;		
	
		
			if(move_uploaded_file($_FILES['dp']['tmp_name'],"admin/images/profile_img/".$pimage))
			{
				$link->where('user_id',$user_id);
				$a1=$link->update("user",array("user_pic"=>$pimage));
				
				if($a1)
				{
					header("location:profile.php?id=$user_id");
				}
			}
			//Image Upload code End
		}
	else
	{
		echo "fail";
		echo $link->getLastError();
	}
	
?>	