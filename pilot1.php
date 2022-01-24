<?php
include("connect3.php");
$tab="create table pilot(
		PID varchar(10),
		Name varchar(10),
		Experience int(20),
		Salary int(10),
		Pname varchar(20))";
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