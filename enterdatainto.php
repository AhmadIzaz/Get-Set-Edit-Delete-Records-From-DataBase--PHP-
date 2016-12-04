<?php
$id = $_POST['id'];
$nam = $_POST['name'];
$enroll = $_POST['enrollment'];
$uni = $_POST['university'];

// including connection file that contain connection.
include("connection.php");

// checking that entered id is already in DB or Not.

/*
$checkid = "SELECT COUNT('id') FROM 'records' WHERE 'id'= $id";
$chck = mysqli_query($conn,$checkid);
$res = mysql_num_rows($chck);
if( $res > 0)
{

}
*/




// otherwise insert into DB
$enterintodb = "INSERT INTO `records`(`Id`, `Name`, `Enrollment`, `Univeristy`) VALUES ('$id','$nam','$enroll','$uni')";
$check  = mysqli_query($conn,$enterintodb);
if($check)
{
	echo "Succesfully Added"; 
}
else
{
  echo "Data is already in DB -> ID <br>";
  die("Data Not inserted".mysqli_connect_error());     
}

//close the connection
mysqli_close($conn);
//redirectng to start page again.
header('Location:'.'http://localhost/practices/Get%20and%20Set%20into%20DB/Home.php');
?>