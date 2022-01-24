<?php
include("connect.php");
$tab="create table Customer_details( 
		CustomerName varchar(20),
		Total_Amount_Paid int(10),
		date_of_payment varchar(20))";
$sql=mysqli_query($conn,$tab);
if($sql)
{
	echo "table is created";
}	
else
{
	echo "table is failed";
}
?>