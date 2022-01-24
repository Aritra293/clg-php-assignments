<?php
	include("connect.php");
	$tab="drop table sailor;";
	$data=mysqli_query($con,$tab);
	if($data)
	{
		echo "table dropped";
	}
	else
	{
		echo "table does not exists";
	}
		
?>