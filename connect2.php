<?php
$db_server="localhost";
$db_user="root";
$db_pass="";
$db_name="assg2";
$con=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
if($con)
{
		echo "connection done successfully";
}
else
{
		echo"connection is failed";
}

?>