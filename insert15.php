<?php
include("connect2.php");
$sql="insert into  Sports values ('Rohit',9378,4525,2461);";
$sql.="insert into Sports values('Virat',10874,8469,2452);";
$sql.="insert into Sports values('Rahul',4574,2469,1652);";
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