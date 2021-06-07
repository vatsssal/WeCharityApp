<?php	
   include'../include/connect.php';
   $blog_title=$_REQUEST['blog_title'];
   $blog_content=$_REQUEST['blog_content'];
   $sql=$link->insert("blog",array("blog_title"=>$blog_title,"blog_content"=>$blog_content));
   if($sql)
   {
   
   
   
   	$img = $_FILES['blogImg']['name'];
   	$ext = pathinfo($img,PATHINFO_EXTENSION);
   	$pimage = "blogImg".$sql.'.'.$ext;	
   
   	if(move_uploaded_file($_FILES['blogImg']['tmp_name'],"../images/blogs_img/".$pimage))
   		{
   			$link->where('blog_id',$sql);
   			$a1=$link->update("blog",array("blog_image"=>$pimage));
   			
   			if($a1)
   			{
   				header("location:manage_blogs.php");
   			}
   		}		
   }
   else
   {
   	echo "fail";
   	echo $link->getLastError();
   }
   
   ?>