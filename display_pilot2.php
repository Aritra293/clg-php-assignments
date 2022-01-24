<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr><h4>pilot name of who drives Indigo<h4>
		<th> PID </th>
		<th> Name </th>
		<th> Experience </th>
		<th> Salary </th>
		<th> Pname </th>
		
	</tr>	
<?php
include("connect3.php");
$sql="SELECT Name FROM pilot JOIN schedule1 WHERE pilot.PID=schedule1.PID  AND  JOIN flight flight.FltNo=schedule1.FltNo AND flight.Company='Indigo';";
$data=mysqli_query($con,$sql);
while($Res=mysqli_fetch_assoc($data))
{
	echo "<tr>
			<td>".$Res['PID']."</td>
			<td>".$Res['Name']."</td>
			<td>".$Res['Experience']."</td>
			<td>".$Res['Salary']."</td>
			<td>".$Res['Pname']."</td>
			<td><a href='update_7.php?PID=$Res[PID]&Name=$Res[Name]&Experience=$Res[Experience]&Salary=$Res[Salary]
			&Pname=$Res[Pname]'/a><td>
			</tr>";
}
?>
</table>
</body>
</html>