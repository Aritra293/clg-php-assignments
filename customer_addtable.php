<?php
	include("connect3.php");
	$tab="ALTER TABLE Customer ADD date_of_birth int(30)";
	$data=mysqli_query($con,$tab);
	if($data)
	{
		echo "column added";
	}
	else
	{
		echo "column cannot be added";
	}
		
?>