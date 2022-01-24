<form action="" method="POST">
Employee_ID<input type="text" name="e_id" value=""/>
Employee NAME<input type="text" name="name" value=""/>
Salary<input type="text" name="sal" value=""/>
Department<input type="text" name="dep" value=""/>
DOB<input type="text" name="dob" value=""/>
<input type="submit" name="submit" value="submit"/>
</form>
<?php
include("connect.php");
if(isset($_POST['submit']))
{
	$eid=$_POST['e_id'];
	$nm=$_POST['name'];
	$sal=$_POST['sal'];
	$dep=$_POST['dep'];
	$dob=$_POST['dob'];
$query="update `Employee` set `ename`='$nm',`salary`='$sal',`dept`='$dep',`dob`='$dob'
where `eid`='$eid';";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "updated successfully";
}
else
{
	echo "sorry!! something went wrong";
}
}
?>