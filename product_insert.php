<?php
include("connect3.php");
$sql="insert into Product values('P01','Headphones','Dell','Wireless',1750);";
$sql.="insert into Product values('P02','Mouse','HP','Device',565);";
$sql.="insert into Product values('P03','LED Monitor','Asus','Electronic',6785);";
$sql.="insert into Product values('P04','Laptop','HP','Electronic',45510);";
$sql.="insert into Product values('P05','Speakers','Boat','Bluetooth',800);";
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