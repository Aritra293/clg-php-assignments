<?php
include("connect2.php");
$tab="create table Sports( 
		PlayerName varchar(20),
		OdiRuns int(10),
	    TestRuns int(10),
		T20Runs int(10))";
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