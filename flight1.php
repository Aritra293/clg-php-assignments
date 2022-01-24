<?php
include("connect3.php");
$tab="create table Flight(
		FltNo varchar(10),
		Company varchar(20),
		manufacturing_year int(10),
		capacity int(10))";
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