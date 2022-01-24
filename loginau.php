<?php
include("connect.php");
$tab="create table Login_au(
Username varchar(30),
Password varchar(30))";
$data=mysqli_query($conn,$tab);
if($data)
{
echo "table is created";
}
else
{
echo "table is not created";
}
?>