<?php
include("connect3.php");
$tab="create table schedule1(
		FltNo varchar(10),
		PID varchar(10),
		source_city varchar(20),
		dest_city varchar(20),
		s_date varchar(10))";
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