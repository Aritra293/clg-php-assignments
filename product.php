<?php
include("connect3.php");
$tab="create table Product( 
		P_ID varchar(10),
		PNAME varchar(20),
	    BRAND varchar(20),
		TYPE  varchar(10),
		PRICE int(10))";
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