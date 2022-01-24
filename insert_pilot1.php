<?php
include("connect3.php");
$sql="insert into pilot values('p01','Virat',11,95000,'vk');";
$sql.="insert into pilot values('p02','Rohit',15,94000,'rs');";
$sql.="insert into pilot values('p03','Shreyas',4,65000,'si');";
$sql.="insert into pilot values('p04','Ishan',2,55000,'ik');";
$sql.="insert into pilot values('p05','Rahul',10,85000,'klr');";
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