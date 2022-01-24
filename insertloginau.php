<?php
include("connect.php");
$sql="insert into Login_au values
('shreya19','shreya237');";
$sql.="insert into Login_au values
('Sayan10','sayan24');";
$sql.="insert into Login_au values
('bong03','bongchef03');";
$sql.="insert into Login_au values
('priya18','priya9611');";
$sql.="insert into Login_au values
('aritra123','aritra78901');";
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