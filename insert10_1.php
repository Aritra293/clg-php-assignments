<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
HRA PERCENTAGE:<input type="text" name="hra" value=""/><br>
DA PERCENTAGE:<input type="text" name="da" value=""/><br>
PF PERCENTAGE:<input type="text" name="pf" value=""/><br>	
Emp name:<input type="text" name="name" value=""/><br>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
include("connect2.php");
if(isset($_POST['submit']))
{
	$hrp=$_POST['hra'];
	$dap=$_POST['da'];
	$pfp=$_POST['pf'];
	$name=$_POST['name'];
	$sql = "select * from Salary1";
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$hra1=($row['BasicPay']*$hrp)/100;
		$da1=($row['BasicPay']*$dap)/100;
		$pf1=($row['BasicPay']*$pfp)/100;
		$tot=($hra1+$da1+$pf1);
		$query="UPDATE `salary1` SET `HRA`=$hra1,`DA`=$da1,`professional_tax`=$pf1,Total_Salary=$tot+BasicPay
		 WHERE `EmpName`='$name'";
		$data=mysqli_query($con,$query);
		if($data)
		{
			echo "inserted";
		}
		else
		{
			echo "fail";
		}		
	}
}	
