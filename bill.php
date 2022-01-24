<!DOCTYPE html>
<html>
<body>
<form action="insert9.php" method="post">
<?php
	include("connect.php");
	session_start();
	$p = $_POST['pd'];
	$sql = "select * from food_details where food_items='$p'";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
			echo "<h1><u>Your Bill</u></h2>";
			echo "<b>Customer Name :: </b>".$_SESSION["name"]."<br>";
			echo "<b>Food Item :: </b>".$_POST['pd']."<br>";
			echo "<b>Quantity :: </b>".$_POST['qt']."<br>";
			echo "<b>Price(1) :: </b>".$row['price_per_item']."<br>";
			echo "<b>Total Price :: </b>".$row['price_per_item'] * $_POST['qt']."<br>";
			echo "<b>GST=15%</b><br>";
	   		echo "<b>Net Price :: </b>".($row['price_per_item'] * $_POST['qt'] + (0.15 * $row['price_per_item'] * $_POST['qt']));
	}
?>
</body>
</html>