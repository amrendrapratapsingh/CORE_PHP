<table border="1">
<tr><th>Sl.No</th><th>Country Name</th></tr>
<?php
require_once "connection.php";
$sql_qry="select * from country_tbl";
$resultset=mysql_query($sql_qry);
$count=mysql_num_rows($resultset);
if($count>0)
{
$i=1;
while($row=mysql_fetch_assoc($resultset))
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo ucfirst($row['country_name']);?>
</td></tr>
<?php
$i++;
}
}
else
{
?>
<tr><td colspan='2' style='color:red'>
No records found in db..!</td></tr>
<?php
}
?>
</table>
