<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th> B_ID  </th>
		<th> BNAME </th>
		<th> AUTHOR </th>
		<th> PRICE </th>
		<th> SUBJECT </th>
		
	</tr>	
<?php
include("connect3.php");
$query="SELECT * FROM BOOK1;";
$data=mysqli_query($con,$query);
while($Res=mysqli_fetch_assoc($data))
{
	echo "<tr>
			<td>".$Res['B_ID']."</td>
			<td>".$Res['BNAME']."</td>
			<td>".$Res['AUTHOR']."</td>
			<td>".$Res['PRICE']."</td>
			<td>".$Res['SUBJECT']."</td>
			<td><a href='update_7.php?B_ID=$Res[B_ID]& BNAME=$Res[BNAME]& AUTHOR=$Res[AUTHOR]&PRICE=$Res[PRICE]
			&SUBJECT=$Res[SUBJECT]'/a><td>
			</tr>";
}
?>
</table>
</body>
</html>