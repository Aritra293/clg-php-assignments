<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
	</tr>	
<?php
include("connect3.php");
$sql = "SELECT  MIN(salary) FROM pilot";
$result = $con->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo "Minimum Salary :". $row['MIN(salary)'];
    echo "<br />";
}
?>
</table>
</body>
</html>
 