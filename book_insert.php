<?php
include("connect3.php");
$sql="insert into Book1 values('b01','Warrior with Strength','James Wan',125,'Action');";
$sql.="insert into Book1 values('b02','Weep for History','JK Rowling',225,'Thriller');";
$sql.="insert into Book1 values('b03','Staff of The Gods','Harry Osborn',350,'History');";
$sql.="insert into Book1 values('b04','Welcome to The Fires','Aaron Finch',512,'Action');";
$sql.="insert into Book1 values('b05','Soldier of Eternity','Steve Smith',890,'Action');";
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