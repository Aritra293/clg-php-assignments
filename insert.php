<?php
include("connect.php");
$sql="insert into student2 values 
('shreya',2,'kolkata','shreyan123','2020-04-09');";
$sql.="insert into student2 values 
('biswa',5,'kashmir','biswa2012','2012-011-24');";
$sql.="insert into student2 values
('pratima',12,'karnatak','queen121','2021-07-12');";
$sql.="insert into student2 values 
('suresh',1,'kerala','kingsss','2013-03-23');";
$sql.="insert into student2 values 
('rakhi',6,'kalyani','rock57','2004-01-05');";
$sql.="insert into student2 values 
('rakhi',6,'kalyani','rock57','2004-01-05');";
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