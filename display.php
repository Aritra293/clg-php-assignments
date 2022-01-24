<!DOCTYPE html>
<html>
<head>
	<title>display</title>
</head>
<body>
<form action="" method="POST">
	USERNAME:<input type="text" name="susername" value=""/>
	PASSWORD:<input type="text" name="spassword" value=""/><br>
	<input type="submit" name="submit" value="submit"/>
</form><br><br>
<table>
<?php
include("connect.php");
error_reporting(0);
if(isset($_POST['submit']))
{
	$suser=$_POST['username'];
	$spass=$_POST['password'];
	$sql="select *from login where username='$suser' and password='$spass'";
	$data=mysqli_query($conn,$sql);
	$total=mysqli_num_rows($data);
	if($total==1)
	{
		echo "
		<tr>
			<th> name </th>
			<th> roll </th>
			<th> city </th>
			<th> email </th>
			<th> dob </th>
		</tr>";
		$query="select *from student2;";
		$data=mysqli_query($conn,$query);
		while($res=mysqli_fetch_array($data))
		{
			echo"<tr>
			<td> ".$res['NAME']." </td>
			<td> ".$res['ROLL']." </td>
			<td> ".$res['CITY']." </td>
			<td> ".$res['EMAIL']." </td>
			<td> ".$res['DOB']." </td>
			</tr>";
		}
	}
	else
	{
		echo "username or password not exists";
	}
}
?>
</table>
</body>
</html>