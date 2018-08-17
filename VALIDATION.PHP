<?php
extract($_POST);
if(isset($register))
{
if(!empty($name) && !empty($email) && !empty($mobile) && !empty($password))
{
$con=mysql_connect("localhost","root","");
if($con)
{
mysql_select_db("9ambatch");
require_once "validate_str.php";
//checking for email existancy
$sql_chk="select email from users_tbl where email='".format_str($email)."'";
$resultset=mysql_query($sql_chk);
$count=mysql_num_rows($resultset);
if($count>0)
echo "Given email already exits";
else
{
$sql_qry="insert into users_tbl(name,email,mobile,password) values('".format_str($name)."','".format_str($email)."','".format_str($mobile)."','".format_str($password)."')";
$response=mysql_query($sql_qry);
if($response)
echo "Registration is success";
else
echo "Registration is failed";
}
//code end
}
}
else
echo "Please enter all values";
}
?>
validate_str.php
<?php
function format_str($str)
{
$rstr=trim(strip_tags(addslashes($str)));
return $rstr;
}
?>