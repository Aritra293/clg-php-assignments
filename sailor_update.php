<form action="" method="POST">
SAILOR_ID<input type="text" name="s_id" value=""/>
SAILOR NAME<input type="text" name="name" value=""/>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
include("connect.php");
if(isset($_POST['submit']))
{
	$sid=$_POST['s_id'];
	$nm=$_POST['name'];
$query="update sailor set s_name='$nm' where s_id='$sid';";
$data=mysqli_query($conn,$query);
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