<?php
extract($_POST);
if(isset($register))
{
	//connect with database
	$con=mysql_connect("localhost","root","");
	if($con)
	{
		mysql_select_db('student_demo');
	$insqry="insert into student_tbl_record(name,email,address,joining_date) values('$name','$email','$address','$joining_date')";
	$response=mysql_query($insqry);
	if($response)
		echo "registration is success";
	else
		echo "record not inserted";
	}
	
}
else
{
	echo "please submit your infomation";
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
<input type="submit" name="register" value="register">
</form>
</body>
</html>