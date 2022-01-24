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
$suser=$_POST['susername'];
$spass=$_POST['spassword'];
$sql="select * from Login_au where Username='$suser' and Password='$spass'";
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);
if($total==1)
{
echo "
<tr>
<th> NAME </th>
<th> ROLL </th>
<th> CITY </th>
<th> E-MAIL </th>
<th> password</th>
</tr>";
$query="select * from student1;";
$data=mysqli_query($conn,$query);
while($res=mysqli_fetch_array($data))
{
echo "<tr>
<td>".$res['NAME']."</td>
<td>".$res['ROLL']."</td>
<td>".$res['CITY']."</td>
<td>".$res['EMAIL']."</td>
<td>".$res['PASSWORD']."</td>
</tr>";
}
}
else
{
echo "Username or Password does not exist";
}
}
?>
</table>
</body>
</html>