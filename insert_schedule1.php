<?php
include("connect3.php");
$sql="insert into schedule1 values('f01','p02','Delhi','Bangalore','3rdjan21');";
$sql.="insert into schedule1 values('f02','p03','Kolkata','Jaipur','5thjan21');";
$sql.="insert into schedule1 values('f03','p04','Pune','Chennai','7thjan21');";
$sql.="insert into schedule1 values('f04','p05','Ranchi','Mumbai','24thjan21');";
$sql.="insert into schedule1 values('f05','p01','Hyderabad','Mysore','23rdjan21');";
$data=($con->multi_query($sql));
if($data)
{
	echo "data is inserted successfully";
}
else
{
	echo "data is failed";
}
?>