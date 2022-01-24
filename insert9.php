<form action="" method="POST">
Customer_name<input type="text" name="namep" value=""/>
Total amount<input type="text" name="amtp" value=""/>
date of payment<input type="text" name="datep" value=""/>
</br>
</br>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
include("connect.php");
if(isset($_POST['submit']))
{
	$name=$_POST['namep'];
	$amt=$_POST['amtp'];
	$date=$_POST['datep'];
	if($name!=""&&$amt!=""&&$date!="")
	{
		$sql="insert into Customer_details values('$name','$amt','$date');";
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