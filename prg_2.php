<?php
$servername="localhost";
$username="root";
$password="";
$db="assg1";

// Create connection
$conn=new mysqli($servername,$username,$password,$db) or die("you are not connected");

echo "connection successful";

$SQL="CREATE TABLE employee2
(
	ENAME varchar(30),
	ADDRESS varchar(50),
	phno INTEGER(10),
	SALARY INTEGER(10),
	CATEGORY varchar(10),
	LANGUAGE varchar(10),
	primary key(phno)
);";
//$RESULT=MYSQLI_QUERY($conn,$SQL) OR DIE("Can't create the table.");
//$RESULT = MYSQLI_QUERY($conn,$sql) or die (" cannot create the table");
//ECHO "TABLE CREATED"
if(mysqli_query($conn,$SQL))
{
	echo "</br> employee table created successfully";
}
else{
	echo "</br> error creating table";
}
mysqli_error($conn);
?>