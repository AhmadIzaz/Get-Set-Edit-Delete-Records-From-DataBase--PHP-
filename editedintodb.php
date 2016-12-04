<?php

$nameforedit = $_POST['name'];
$namefroreplace = $_POST['editname'];

include('connection.php');

$extract = "UPDATE `records` SET `Name`=  '$namefroreplace'  WHERE  Name = '$nameforedit'";
$check = mysqli_query($conn,$extract);
if ($check)
{
	echo "Record Updated";
}
else
{
	echo "Not Updated";
}

mysqli_close($conn);


?>