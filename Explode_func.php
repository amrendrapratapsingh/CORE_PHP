<?php

//$str="welcom to php";
//$rstr=explode(" ",$str);
//print_r($rstr);

// explode function basically used in case of file uploading

$f="yuvi.jpg";
$f_ex=explode(".",$f);
$img_ext= end($f_ex);
if($img_ext=="jpg")
{
	echo "files is uploaded";
}
else
{
	echo "please upload jpg format";
}




?>