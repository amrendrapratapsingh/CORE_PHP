 display_users.php
<table border="1">
<tr><th>Sl.No</th><th>Name</th><th>Email</th>
<th>Mobile</th>
<th>Action</th>
</tr>
<?php
require_once "dbconnect.php";
$sql_qry="select user_id,name,email,mobile from users_tbl";
$res=mysql_query($sql_qry);
$count=mysql_num_rows($res);
if($count>0)
{
$i=1;
while($row=mysql_fetch_assoc($res))
{
?>
<tr><td><?php echo $i;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><a href="delete.php?uid=<?php echo $row['user_id'];?>">Delete</a>
<a href="update.php?uid=<?php echo $row['user_id'];?>">Update</a>
</td>
</tr>
<?php
$i++;
}
}
else
{
?>
<tr><td colspan="5" style="color:red">No records found in db..!</td></tr>
<?php
}
?>
</table>

delete.php

<?php
$user_id=$_GET['uid'];
require_once "dbconnect.php";
$sql_del="delete from users_tbl where
user_id=$user_id";
$resp=mysql_query($sql_del);
if($resp)
header('location:display_users.php?msg=Deleted');
else
echo "Record not deleted";
?>

update.php

<?php
$uid=$_GET['uid'];
require_once "dbconnect.php";
extract($_POST);
if(isset($update))`
{
$sql_update="update users_tbl set name='$name',email='$email',mobile='$mobile' where user_id=$uid";
$resp=mysql_query($sql_update);
if($resp)
header('location:display_users.php');
else
echo "Not updated";
}
$sql_qry="select name,email,mobile from users_tbl where user_id=$uid";
$res=mysql_query($sql_qry);
$row=mysql_fetch_assoc($res);
?>
<form method="post" action="">
Name: <input type="text" name="name" value="<?php echo $row['name'];?>"/><br/><br/>
Email: <input type="text" name="email" value="<?php echo $row['email'];?>"/><br/><br/>
Mobile: <input type="text" name="mobile" value="<?php echo $row['mobile'];?>"/><br/><br/>
<input type="submit" name="update" value="Update"/>
</form>