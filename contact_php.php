<?php	
	include'connect.php';
	$contact_name=$_REQUEST['contact_name'];
	$contact_email=$_REQUEST['contact_email'];
	$contact_query=$_REQUEST['contact_query'];
	$sql=$link->insert("contact",array("contact_name"=>$contact_name,"contact_email"=>$contact_email,"contact_query"=>$contact_query));
	if($sql)
	{
		echo "success";
		?><script>alert("Your Message has been sent successfully!");
			window.location.href = "index.php";</script><?php
	}
	else
	{
		echo "fail";
		echo $link->getLastError();
	}
	
?>