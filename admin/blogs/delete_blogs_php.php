<?php	
   include'../include/connect.php'; 
   	if(isset($_GET['id']))
   	{
   		$id=$_GET['id'];
   	}
   $sql = $link->rawQueryOne("select * from blog where blog_id=?",array($id));
   
   $img_unlink = "../images/blogs_img/".$sql['blog_image'];
   
   unlink($img_unlink);
   
   	$link->where("blog_id",$id);
   	$sql = $link->delete("blog");
   
   if($sql)
   {
   	header("location:manage_blogs.php");
   }
   else
   {
   	echo "fail";
   	echo $link->getLastError();
   }
   
   ?>