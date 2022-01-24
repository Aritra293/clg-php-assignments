<?php
$servername="localhost";
$username="root";
$password="";
$db="assg1";


// Create connection
$conn=new mysqli($servername,$username,$password,$db) or die("you are not connected");

echo "connection successful";
?>

