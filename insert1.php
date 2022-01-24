<?php
include("connect.php");
$sql="insert into employee2 values 
('Shreya','park circus',9807432213,37000,'General','Bengali');";
$sql.="insert into employee2 values 
('Aritra','Kankurgachi',8100227257,95000,'General','Bengali');";
$sql.="insert into employee2 values 
('Neha','Ultadanga',9857438212,53000,'SC','Hindi');";
$sql.="insert into employee2 values 
('Avik','Beleghata',9123625010,85000,'OBC','Bengali');";
$sql.="insert into employee2 values 
('Rohit','Salt Lake GD block',9521364880,61000,'ST','Marathi');";
$sql.="insert into employee2 values 
('Sneha','New Town',9841435213,73000,'General','Bengali');";
$sql.="insert into employee2 values 
('Sucharita','Dum Dum',9807432219,63000,'ST','Bengali');";
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