<?php
$delrow = $_POST['name'];

include('connection.php');

$query = "DELETE FROM `records` WHERE  Name = '$delrow'";
$chck = mysqli_query($conn,$query);
if ($chck)
{
	echo "Record Deleted";
}
else
{
	echo "Record  Not Deleted "; 
}

mysqli_close($conn);
?>