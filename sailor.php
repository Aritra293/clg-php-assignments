<?php
$servername="localhost";
$username="root";
$password="";
$db="assg1";

// Create connection
$conn=new mysqli($servername,$username,$password,$db) or die("you are not connected");

echo "connection successful";

$SQL="CREATE TABLE sailor
(
	s_id varchar(30),
	s_name varchar(10),
	contact INTEGER(10),
	age INTEGER(30),
	rating INTEGER(30),
	primary key(s_id)
);";
//$RESULT=MYSQLI_QUERY($conn,$SQL) OR DIE("Can't create the table.");
//$RESULT = MYSQLI_QUERY($conn,$sql) or die (" cannot create the table");
//ECHO "TABLE CREATED"
if(mysqli_query($conn,$SQL))
{
	echo "</br> SAILOR table created successfully";
}
else{
	echo "</br> error creating table";
}
mysqli_error($conn);
?>