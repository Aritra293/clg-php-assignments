<?php
include("connect.php");
$tab="create table Employee( 
		eid int(10),
		ename varchar(20),
		salary int(10),
		dept varchar(20),
		dob varchar(10))";
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