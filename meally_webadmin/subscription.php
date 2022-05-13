<?php
include('dbcon.php');

date_default_timezone_set('Asia/Hong_Kong');
$month  = 6;
$date  = 14;

$currentm  = 6;
$currentd  = date('j');

if ($currentm > $month) {
} else {
    if ($currentd > $date) {
        // execute ng code
    } else {
        echo "no decrement";
        exit();
    }
}


$ref_table = 'subscription';
$fetchdata = $database->getReference($ref_table)
    ->getValue();
if ($fetchdata > 0) {
    foreach ($fetchdata as $key => $row) {
        if ($row['left'] == 0) {
            echo "reached 0";
            exit();
        } else {
            $decrease = $row['left'];
            echo --$decrease;
        }
        $updateData = [
            'left' => $decrease,

        ];
        $ref_table = 'subscription/' . $key;
        $updatequery_result = $database->getReference($ref_table)
            ->update($updateData);
    }
} else {
}
