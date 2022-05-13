<?php
// set the default timezone to use.
date_default_timezone_set('Asia/Hong_Kong');
$month  = date('n');
$date  = date('j');
echo $month . "<br>";
echo $date;

$currentm  = date('n');
$currentd  = date('j');

if ($currentm > $month) {
} else {
    if ($currentd > $date) {
        // execute ng code
    }
}
