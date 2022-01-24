<form action="" method="POST">
P_ID<input type="text" name="P_ID" value=""/>
<input type="submit" name="submit" value="submit"/>
<table>
	<tr>
		<th> P_ID </th>
		<th> PNAME </th>
		<th> BRAND </th>
		<th> TYPE </th>
		<th> PRICE </th>
		
	</tr>	
</form>
<?php
include("connect3.php");
if(isset($_POST['submit']))
{
	$P_ID=$_POST['P_ID'];
$query="select Product.P_ID,Product.PNAME,Product.BRAND,Product.TYPE,Product.PRICE from Product where P_ID='$P_ID';";
$data=mysqli_query($con,$query);
while($Res=mysqli_fetch_assoc($data))
{
	echo "<tr>
			<td>".$Res['P_ID']."</td>
			<td>".$Res['PNAME']."</td>
			<td>".$Res['BRAND']."</td>
			<td>".$Res['TYPE']."</td>
			<td>".$Res['PRICE']."</td>
			<td><a href='update_7.php?P_ID=$Res[P_ID]&PNAME=$Res[PNAME]&BRAND=$Res[BRAND]&TYPE=$Res[TYPE]
			&PRICE=$Res[PRICE]'/a><td>
			</tr>";
}
}
?>
</table>
</body>
</html>