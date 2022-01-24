<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr><h4>pilot name of delhi to bangalore<h4>
		<th> PID </th>
		<th> NAME </th>
		<th> EXPERIENCE </th>
		<th> SALARY </th>
		<th> PNAME </th>
		
	</tr>	
<?php
include("connect3.php");
$query="SELECT pilot.PID,pilot.Name FROM pilot JOIN schedule1 ON pilot.PID=schedule1.PID WHERE Source_city='Delhi' AND dest_city='Bangalore';";
$data=mysqli_query($con,$query);
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