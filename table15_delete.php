<form action="" method="POST">
Player_Name<input type="text" name="name" value=""/>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
include("connect2.php");
if(isset($_POST['submit']))
{
	$namep=$_POST['name'];
$query="delete from Sports where PlayerName='$namep'";
$data=mysqli_query($con,$query);
if($data)
{
	echo "deleted successfully";
}
else
{
	echo "sorry";
}
}
?>