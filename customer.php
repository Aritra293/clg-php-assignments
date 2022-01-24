<?php
include("connect3.php");
$tab="create table Customer( 
		C_id varchar(20),
		CName varchar(30),
		City varchar(30),
		Phone int(10))";
$sql=mysqli_query($con,$tab);
if($sql)
{
	echo "table is created";
}	
else
{
	echo "table is failed";
}
?>