<form action="" method="POST">
SAILOR_ID<input type="text" name="s_id" value=""/>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
include("connect.php");
if(isset($_POST['submit']))
{
	$sid=$_POST['s_id'];
$query="delete from sailor where s_id='$sid'";
$data=mysqli_query($conn,$query);
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