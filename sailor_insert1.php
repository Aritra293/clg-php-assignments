<form action="" method="POST">
SAILOR_ID<input type="text" name="s_id" value=""/>
SAILOR_NAME<input type="TEXT" name="s_name" value=""/>
CONATCT NO<input type="text" name="contact" value=""/>
AGE<input type="text" name="age" value=""/>
RATING<input type="text" name="rating" value=""/>
</br>
</br>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
include("connect.php");
if(isset($_POST['submit']))
{
	$sid=$_POST['s_id'];
	$name=$_POST['s_name'];
	$cont =$_POST['contact'];
	$ag=$_POST['age'];
	$rate=$_POST['rating'];
	if($sid!=""&&$name!=""&&$cont!=""&&$ag!=""&&$rate!="")
	{
		$sql="insert into sailor values('$sid','$name','$cont','$ag','$rate');";
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