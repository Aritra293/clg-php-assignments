<?php
include("connect3.php");
$tab="create table Book( 
		B_ID varchar(10),
		BNAME varchar(30),
	    AUTHOR varchar(20),
		PRICE  int(10),
		SUBJECT varchar(10))";
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