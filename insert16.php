<form action="" method="POST">
name<input type="text" name="namep" value=""/>
city<input type="TEXT" name="cityp" value=""/>
phno<input type="text" name="phnop" value=""/>
email<input type="text" name="emailp" value=""/>
password<input type="text" name="pwd" value=""/>
</br>
</br>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
include("connect.php");
if(isset($_POST['submit']))
{
	$name=$_POST['namep'];
	$city=$_POST['cityp'];
	$phno =$_POST['phnop'];
	$email=$_POST['emailp'];
	$password=$_POST['pwd'];
	if($name!=""&&$city!=""&&$phno!=""&&$email!=""&&$password!="")
	{
		$sql="insert into User values('$name','$city','$phno','$email','$password');";
		$data=mysqli_query($conn,$sql);
		if($data)
		{
		echo "successfully inserted";
		}
		else
		{
		echo "sorry! something there wrong";
		}
	}
	else
		echo " please insert all data";	
}
?>