<form action="" method="POST">
ODI RUNS<input type="text" name="odi" value=""/>
TEST RUNS<input type="text" name="test" value=""/>
T20 RUNS<input type="text" name="t20" value=""/>
PLAYER NAME <input type="text" name="name" value=""/>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
include("connect2.php");
if(isset($_POST['submit']))
{
	$odip=$_POST['odi'];
	$testp=$_POST['test'];
	$t20p=$_POST['t20'];
	$nm=$_POST['name'];
$query="update `Sports` set `OdiRuns`='$odip',`TestRuns`='$testp',`T20Runs`='$t20p' 
where `PlayerName`='$nm';";
$data=mysqli_query($con,$query);
if($data)
{
	echo "updated successfully";
}
else
{
	echo "sorry!! something went wrong";
}
}
?>