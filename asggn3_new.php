<?php
$servername="localhost";
$username="root";
$password="";
$db="assg1";

$conn=new mysqli($servername,$username,$password,$db) or die("you are not connected");

echo "connection successful";

//include("connection_2.php");

$sql = "SELECT