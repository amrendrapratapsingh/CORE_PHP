<?php
function format_str($str)
{
$rstr=trim(strip_tags(addslashes($str)));
return $rstr;
}
?>