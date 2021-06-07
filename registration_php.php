	<?php
	session_start();
	include'connect.php';
	$user_name=$_REQUEST['user_name'];
	$user_email=$_REQUEST['user_email'];
	$user_password=$_REQUEST['user_password'];
	$user_address=$_REQUEST['user_address'];
	$user_contact=$_REQUEST['user_contact'];
	$user_pincode=$_REQUEST['user_pincode'];
	$check=$link->rawQueryOne("select * from user where user_email=?",array($user_email));
	if($check)
	{
		?><script>alert("Your Email has already been registered! Please Login.");
					window.location.href = "login.php";</script><?php
	}
	$sql=$link->insert("user",array("user_name"=>$user_name,"user_email"=>$user_email,"user_password"=>$user_password,"user_address"=>$user_address,"user_contact"=>$user_contact,"user_pincode"=>$user_pincode));
	if($sql)
	{
		$img = $_FILES['dp']['name'];
		$ext = pathinfo($img,PATHINFO_EXTENSION);
		$pimage = "dp".$sql.'.'.$ext;	

		if(move_uploaded_file($_FILES['dp']['tmp_name'],"admin/images/profile_img/".$pimage))
			{
				$link->where('user_id',$sql);
				$a1=$link->update("user",array("user_pic"=>$pimage));
				
				if($a1)
				{
					$user_id=$sql['user_id'];
					$_SESSION['user_id'] = "$user_id";
					$_SESSION['user_name'] = "$user_name";
					header("location:login.php");
				}
			}			
	}
	else
	{
		echo "fail";
		echo $link->getLastError();
	}
	
?>