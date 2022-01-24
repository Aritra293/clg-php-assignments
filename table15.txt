<?php
include("connect2.php");
$tab="create table Salary1( 
		EmpName varchar(20),
		BasicPay int(10),
		HRA int(10),
		DA int(10),
		professional_tax int(10),
		Total_Salary int(10))";
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