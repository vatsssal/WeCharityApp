
<?php	
	include'../include/connect.php';
	$charity_type_name=$_REQUEST['charity_type_name'];
	$sql=$link->insert("charity_type",array("charity_type_name"=>$charity_type_name));
	if($sql)
	{
		echo "success";
		header("location:manage_charity_type.php");
	}
	else
	{
		echo "fail";
		echo $link->getLastError();
	}
	
?>