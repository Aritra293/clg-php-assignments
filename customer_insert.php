<?php
include("connect3.php");
$sql="insert into Customer values('C02','ARITRA DAW','Chennai',8100227278);";
$sql.="insert into Customer values('C03','SHREYA YADAV','Mumbai',9350452188);";
$sql.="insert into Customer values('C04','ANKITA ROY','Lucknow',7125488210);";
$sql.="insert into Customer values('C05','NEHA SAHA','Amritsar',8901125460);";
$sql.="insert into Customer values('C06','SAHIL KAR','RANCHI',8901825560);";
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