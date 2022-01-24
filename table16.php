<?php
include("connect.php");
$tab="create table User( 
		name varchar(20),
		city varchar(20),
		phno integer(10),
		email varchar(20),
		password varchar(30),
		primary key(phno,email));";
$sql=mysqli_query($conn,$tab);
if($sql)
{
	echo "  table is created";
}	
else
{
	echo "table is failed";
}
?>