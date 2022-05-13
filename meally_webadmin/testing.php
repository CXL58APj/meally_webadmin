<?php
// PHP program using trim() 

$str = "  Hire freelance developer ";

// Since a second parameter was not passed
// leading and trailing whitespaces are removed
$str = str_replace(' ', '', $str);
echo $str;
