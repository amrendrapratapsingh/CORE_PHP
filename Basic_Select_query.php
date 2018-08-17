<?php
mysql_connect("localhost","root","");
mysql_select_db("yuvi_db");
$sql_qry="select * from yuvi_tbl where email='amrendrapratap706@gmail.com'";
$resultset=mysql_query($sql_qry);
$count=mysql_num_rows($resultset);
if($count>0)
{
	$row=mysql_fetch_assoc($resultset);
	print_r($row);
	echo $row['name'];
?>