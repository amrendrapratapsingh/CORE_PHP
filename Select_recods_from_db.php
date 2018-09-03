<?php
mysql_connect("localhost","root","");
mysql_select_db("users_tbl");
$select_qry="select * from users_tbl where='god@gmail.com'";
$resulset=mysql_query($select_qry);
$count=mysql_num_rows($resulset);
if($count>0)
{
 $row=mysql_fetch_assoc($resultset);
print_r($row);
echo $row['name'];
}
?>