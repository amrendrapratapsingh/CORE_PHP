<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="student_demo";
mysql_connect($hostname,$username,$password);
mysql_select_db($dbname);
if(isset($_POST['Register']))
{
	$name= $_POST['name'];
	$email= $_POST['email'];
	$address = $_POST['address'];
	$joining_date= $_POST['joining_date'];
if(mysql_query("insert into student_tbl_record(name,email,address,joining_date) values('$name','$email','$address','$joining_date')"))
	
	{
		echo "success";
	}

}




?>

<html>
<head>
<title>Php form</title>
</head>
<body>
<h2>Registration Form...</h2>
<form method="POST">
Name: <input type="text" name="name" placeholder="Enter Username"/><br/><br/>
Email: <input type="text" name="email" placeholder="Enter Email"/><br/><br/>
Address: <input type="text" name="address" placeholder="Enter address"/><br/><br/>
Joining_date: <input type="text" name="joining_date" placeholder="Enter Joining_date"><br/><br/>
<input type="submit" name="Register" value="submit">
</form>
</body>
</html>