<form action="" method="POST">
CNAME<input type="text" name="CName" value=""/>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
include("connect3.php");
if(isset($_POST['submit']))
{
	$CName=$_POST['CName'];
$query="delete from Customer where CName='$CName'";
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