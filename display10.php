<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th> employee name</th>
		<th> BasicPay </th>
		<th> HRA </th>
		<th> DA </th>
		<th> PROFESSIONAL TAX </th>
		<th> TOTAL SALARY </th>
		
	</tr>	
<?php
include("connect2.php");
$query="select *from Salary1";
$data=mysqli_query($con,$query);
while($Res=mysqli_fetch_assoc($data))
{
	echo "<tr>
			<td>".$Res['EmpName']."</td>
			<td>".$Res['BasicPay']."</td>
			<td>".$Res['HRA']."</td>
			<td>".$Res['DA']."</td>
			<td>".$Res['professional_tax']."</td>
			<td>".$Res['Total_Salary']."</td>
			<td><a href='update_7.php?EmpName=$Res[EmpName]&BasicPay=$Res[BasicPay]&HRA=$Res[HRA]&DA=$Res[DA]&professional_tax=$Res[professional_tax]
			&Total_Salary=$Res[Total_Salary]'/a><td>
			</tr>";
}
?>
</table>
</body>
</html>