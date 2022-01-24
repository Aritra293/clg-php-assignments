<?php
include("connect.php");
$sql="insert into student1 values 
('Shreyan',3,'Pune','shreya19','shreya237');";
$sql.="insert into student1 values 
('Sayan',4,'Chennai','Sayan10','sayan24');";
$sql.="insert into student1 values 
('Pratik',5,'Gwailior','bong03','pran796');";
$sql.="insert into student1 values 
('Priyanka',8,'Pune','priya18','priya9611');";
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
