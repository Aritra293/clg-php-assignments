<?php
$servername="localhost";
$username="root";
$password="";
$db="assg1";

// Create connection
$conn=new mysqli($servername,$username,$password,$db) or die("you are not connected");

echo "connection successful";

$SQL="CREATE TABLE STUDENT1
(
	NAME varchar(30),
	ROLL INTEGER(10),
	CITY VARCHAR(10),
	EMAIL VARCHAR(30),
	PASSWORD VARCHAR(50),
	primary key(ROLL)
);";
//$RESULT=MYSQLI_QUERY($conn,$SQL) OR DIE("Can't create the table.");
//$RESULT = MYSQLI_QUERY($conn,$sql) or die (" cannot create the table");
//ECHO "TABLE CREATED"
if(mysqli_query($conn,$SQL))
{
	echo "</br> STUDENT table created successfully";
}
else{
	echo "</br> error creating table";
}
mysqli_error($conn);
?>