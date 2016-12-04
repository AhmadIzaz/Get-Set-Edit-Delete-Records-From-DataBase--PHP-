<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = mysqli_connect($host,$username,$password,$dbname);
if (!($conn))
{
	echo "ConnectioN Failed";
     die("Connection Failed".mysqli_connect_error());
}
else
   {
     echo "Connection Established";
   }		
?>