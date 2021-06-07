<?php
        session_start();
        $user_id=$_SESSION['user_id'];
	include'connect.php'; 
	$rs=$_REQUEST['rs'];
	$charity_id=$_REQUEST['charity_id'];

	//Inserting to charity_donation table
	$sql=$link->insert("charity_donation",array("user_id"=>$user_id,"charity_id"=>$charity_id,"charity_amount"=>$rs));

	//Retriving charity info
	$link->where("charity_id",$charity_id);
	$sql2=$link->rawQueryOne("select sum(charity_achieved_target) as sum from charity where charity_id=$charity_id");

	$at=$sql2['sum'];
	$sum=$at+$rs;//addition of Rupees donated
	
	//Adding to charity target field table
	$link->where("charity_id",$charity_id);
	$sql=$link->update("charity",array("charity_achieved_target"=>$sum));
	$sum=NULL;

	//Retriving user info
	$link->where("user_id",$user_id);
	$sq=$link->rawQueryOne("select sum(donated_amount) as amount from user");

	$amount=$sq['amount'];
	$summ=$amount+$rs;//addition of Rupees donated
	
	//Adding to user donared field table
	$link->where("user_id",$user_id);
	$sql=$link->update("user",array("donated_amount"=>$summ));
	$summ=NULL;

	if($sql)
	{
		
		echo "success";
		header("location:charity_single.php?id=$charity_id");
	}
	else
	{
		echo "fail";
		echo $link->getLastError();
	}
?>