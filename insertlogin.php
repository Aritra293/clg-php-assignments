<?php
include("connect.php");
$sql="insert into login values 
('aritra','aritra123');";
$sql="insert into login values 
('oreo','aritra456');";
$sql="insert into login values 
('Adi','aritra789');";
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