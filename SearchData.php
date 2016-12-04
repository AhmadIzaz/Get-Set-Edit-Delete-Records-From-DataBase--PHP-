<?php
error_reporting(-1);
$searchname = $_POST['search'];

include ('connection.php');

$search_in_db = "SELECT * FROM `records` WHERE  Name ='$searchname'";
$ch = mysqli_query($conn, $search_in_db);

if($ch->num_rows > 0)
while ($rows = $ch->fetch_array())
{
	
 	$i = $rows["Id"];
	$n = $rows["Name"];

	echo "<br> ID : ".$i."<br>"."NAME :".$n;	
}
else
 echo " <br> RECORD NOT FOUND";

//close connection
mysqli_close($conn);
//redirect


?>