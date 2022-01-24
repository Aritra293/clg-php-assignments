<?php
include("connect2.php");
$sql="insert into Salary1 values ('Aritra',410000,'' ,'','','');";
$sql.="insert into Salary1 values ('Tishita',390400,'','','','');";
$sql.="insert into Salary1 values ('Saumadeep',360000,'','','','');";
$sql.="insert into Salary1 values('Ankita',387000,'','','','');";
$sql.="insert into Salary1 values('Pritam',345000,'','','','');";
$sql.="insert into Salary1 values('Sanjana',357000,'','','','');";
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