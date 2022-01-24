<?php
include("connect.php");
$sql="insert into Employee values (01,'Eshan',51452,'Accounts','09dec2003');";
$sql.="insert into Employee values (02,'Aritra',52460,'IT','07dec2000');";
$sql.="insert into Employee values (03,'Shreya',35452,'Customer Care','09jan2001');";
$sql.="insert into Employee values (04,'Tishita',51250,'IT','14aug2002');";
$sql.="insert into Employee values (05,'Sayan',47452,'IT','12oct2001');";
$sql.="insert into Employee values (06,'Ankita',42352,'Backend Developer','12jan2002');";
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