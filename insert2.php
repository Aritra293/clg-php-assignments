<?php
include("connect.php");
$sql="insert into student2 values
('shreyan',2,'kolkata','shreyan123','2020-04-09');";
$sql.="insert into student2 values
('sanjib',3,'pune','argha223','2020-04-09');";
$sql.="insert into student2 values
('jiban',5,'dehradun','inpact123','2020-04-09');";
$sql.="insert into student2 values
('syam',9,'jaipur','traders003','2020-04-09');";
$sql.="insert into student2 values
('debu',7,'dhaka','school512','2020-04-09');";
$data=($conn->multi_query($sql));
if($data)
{
	echo "successfully inserted";
}
else
{
	echo "failed";
}

?>