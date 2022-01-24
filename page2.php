<!DOCTYPE html>
<html>
<body>
<form action="bill.php" method="post">
<?php
	include("connect.php");
	session_start();
	$_SESSION["name"]=$_POST["name"];
	$sql = "select * from Food_Details";
	$result = mysqli_query($conn,$sql);
	echo "Food List : <select name='pd'>";
	echo "<option hidden>Order your Food</option>";
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<option>".$row['food_items']."</option>";
	}
	echo "</select> ";
?>
<input type = "number" name = "qt" min = "1" value = "1" max="15" style="width:3%">
<button>Purchase</button>
</form>
</body>
</html>