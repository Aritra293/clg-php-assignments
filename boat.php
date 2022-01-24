<?php
$servername="localhost";
$username="root";
$password="";
$db="assg1";

// Create connection
$conn=new mysqli($servername,$username,$password,$db) or die("you are not connected");

echo "connection successful";

$SQL="CREATE TABLE boat
(
	b_id varchar(30),
	name varchar(10),
	capacity INTEGER(30),
	color varchar(10),
	primary key(b_id)
);";
//$RESULT=MYSQLI_QUERY($conn,$SQL) OR DIE("Can't create the table.");
//$RESULT = MYSQLI_QUERY($conn,$sql) or die (" cannot create the table");
//ECHO "TABLE CREATED"
if(mysqli_query($conn,$SQL))
{
	echo "</br> boat table created successfully";
}
else{
	echo "</br> error creating table";
}
mysqli_error($conn);
?>