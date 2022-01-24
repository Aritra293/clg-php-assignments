<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th> S_ID </th>
		<th> SAILOR NAME </th>
		<th> CONTACT </th>
		<th> AGE </th>
		<th> RATING </th>
		
	</tr>	
<?php
include("connect.php");
$query="select *from sailor";
$data=mysqli_query($conn,$query);
while($Res=mysqli_fetch_assoc($data))
{
	echo "<tr>
			<td>".$Res['s_id']."</td>
			<td>".$Res['s_name']."</td>
			<td>".$Res['contact']."</td>
			<td>".$Res['age']."</td>
			<td>".$Res['rating']."</td>
			<td><a href='update_7.php?s_id=$Res[s_id]&s_name=$Res[s_name]&contact=$Res[contact]&age=$Res[age]
			&rating=$Res[rating]'/a><td>
			</tr>";
}
?>
</table>
</body>
</html>