<?php
include("connect.php");
$sql="insert into sailor values 
('S01','Virat',9107432213,34,4);";
$sql.="insert into sailor values 
('S02','Rohit',8907435613,31,8);";
$sql.="insert into sailor values 
('S03','Rahul',7507772213,30,7);";

$data=($conn->multi_query($sql));
if($data)
{
echo "data is inserted successfully";
}
else
{
echo "data is failed";
}

?> 