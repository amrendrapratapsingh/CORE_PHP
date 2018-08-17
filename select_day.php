<html>
<head>
<title>
welcome to select day format...
</title>
<style>
body{
	background-color:lightgreen;
	text-align:center;
}
div{
	text-align:center;
	
}
</style>
</head>
<body>
<select name="day">

<option>-select day-</option>
<?php
for($i=0;$i<=31;$i++)
{
?>
<option><?php echo $i;?></option>
<?php
}
?>
</select>
</body>
</html>