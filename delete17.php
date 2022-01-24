<form action="" method="POST">
Employeeid<input type="text" name="name" value=""/>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
include("connect.php");
if(isset($_POST['submit']))
{
	$namep=$_POST['name'];
$query="delete from Employee where eid='$namep'";
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