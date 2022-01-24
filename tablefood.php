<?php
include("connect.php");
$tab11="create table Food_Details(
	food_items varchar(20),
	price_per_item int(20))";
$sql=mysqli_query($conn,$tab11);
if($sql)
{
	echo "table is created";
}	
else
{
	echo "table is failed";
}
?>
