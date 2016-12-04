<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap-4.0.0-alpha.5-dist/css/bootstrap.min.css" />
<title>Data Entry</title>
</head>
<style>
form
{
	margin-top:20px;
	margin-left:20px;
}
.btn
{
	margin-top:20px;
	margin-left:20px;
}
</style>
<body>
<!-- Form to Enter Data  into db -->

<form method="post"  action="enterdatainto.php">
Enter Id: <br />
<input type="text" name="id" required="required" placeholder="Id e.g 1,2,3" /> <br />
Enter Name : <br />
<input type="text" name="name" required="required"   placeholder="e.g Ahmad Izaz"/> <br />
Enter Enrollment: <br />
<input type="text" name="enrollment" required="required"  placeholder="e.g 12345"/> <br />
Enter University : <br />
<input type="text" name="university" required="required"  placeholder="e.g Bahria Univeristy Islamabad"/> <br />
<input type="submit" class="btn btn-primary" value="Enter Data"  />
<a href="Home.php"> <input type="button" class="btn btn-danger" value="Back"  />
</form>

<br />
</body>
</html>