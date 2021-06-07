<?php	
   include'../include/connect.php'; 
   
   $blog_id=$_REQUEST['blog_id'];
   $blog_title=$_REQUEST['blog_title'];
   $blog_content=$_REQUEST['blog_content'];


   $link->where("blog_id",$blog_id);
   $sql=$link->update("blog",array("blog_title"=>$blog_title,"blog_content"=>$blog_content));
   if($sql)
   {
	header("location:manage_blogs.php");
   }
   
   $img = $_FILES['blogImg']['name'];
   if($img != NULL)
   {
	   $sql = $link->rawQueryOne("select * from blog where blog_id=?",array($blog_id));

	   $img_unlink = "../images/blogs_img/".$sql['blog_image'];

	   unlink($img_unlink);
	   
	   $ext = pathinfo($img,PATHINFO_EXTENSION);
	   $pimage = "blogImg".$blog_id.'.'.$ext;		

   
	   if(move_uploaded_file($_FILES['blogImg']['tmp_name'],"../images/blogs_img/".$pimage))
	   {
		   $link->where('blog_id',$blog_id);
		   $a1=$link->update("blog",array("blog_image"=>$pimage));
		   
		   if($a1)
		   {
			   header("location:manage_blogs.php");
		   }
	   }
   }
?>