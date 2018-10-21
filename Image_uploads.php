<?php

if(isset($_POST['image']))
{
$f_name=$_FILES['myfile']['name'];
$f_tmp=$_FILES[	'myfile']['tmp_name'];
$f_size=$_FILES['myfile']['size'];
$f_ext=explode('.',$f_name);
$f_ext=strtolower(end($f_ext));
$newfile=uniqid().'.'.$f_ext; // using for the same name image upload purpose
$store="uploads/".$newfile;
if($f_ext=="jpg"||$f_ext=="jpeg"||$f_ext=="gif")
{
	
	if($f_size>=1000000)
	{
		echo "rightsize";
	}
	else
	{
		if(move_uploaded_file($f_tmp,$store))
		{
			echo "uploaded";
		}
	}
}
else
{
	echo "please you can choose the jpg and jpeg and gif format";
}

}

?>
<html>
<head>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="myfile"><br><br>
<input type="submit" value="upload" name="image">
</form>
</body>
</html>