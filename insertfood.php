<?php
include("connect.php");
$sql="insert into Food_Details values ('Biriyani',150);";
$sql.="insert into Food_Details values ('Fried Rice',80);";
$sql.="insert into Food_Details values ('roll',50);";
$sql.="insert into Food_Details values ('chowmin',120);";
$sql.="insert into Food_Details values ('Burger',60);";
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