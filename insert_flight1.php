<?php
include("connect3.php");
$sql="insert into flight values('f01','AirIndia',1951,12500);";
$sql.="insert into flight values('f02','QatarAirways',1969,22510);";
$sql.="insert into flight values('f03','Indigo',1982,35010);";
$sql.="insert into flight values('f04','Emirates',1957,51248);";
$sql.="insert into flight values('f05','AirAsia',1913,12654);";
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