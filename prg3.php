<?php
$servername="localhost";
$username="root";
$password="";
$db="assg1";

$conn=new mysqli($servername,$username,$password,$db) or die("you are not connected");

echo "connection successful";

$SQL="CREATE TABLE login
(
	username varchar(30),
	password varchar(50),
	primary key(password)
);";
//$RESULT=MYSQLI_QUERY($conn,$SQL) OR DIE("Can't create the table.");
//$RESULT = MYSQLI_QUERY($conn,$sql) or die (" cannot create the table");
//ECHO "TABLE CREATED"
if(mysqli_query($conn,$SQL))
{
	echo "</br> login table created successfully";
}
else{
	echo "</br> error creating table";
}
mysqli_error($conn);
?>