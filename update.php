<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form action="" method="POST">
USERNAME<input type="text" name="username" value=""/>
PASSWORD<input type="password" name="password" value=""/>
</br>
</br>
OLD PASSWORD<input type="text" name="pass" value=""/>
</br></br>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
include("connect.php");
if(isset($_POST['submit']))
{
$uuser=$_POST['username'];
$ppass=$_POST['password'];
$opsw =$_POST['pass'];
$sql="update student1 set EMAIL='$uuser',PASSWORD='$ppass' where PASSWORD ='$opsw'";
$data=mysqli_query($conn,$sql);
if($data)
{
echo "Successfully updated";
}
else
{
echo "Sorry! something went wrong!!";
}
}
?>
</table>
</body>
</html>