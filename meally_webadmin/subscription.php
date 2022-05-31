<?php
include('dbcon.php');

date_default_timezone_set('Asia/Hong_Kong');
$updatesub = false;







$dbdate = 2022513;
$currentm  = date('n');
$currentd  = date('j');
$currenty = date('Y');
$currentdate = $currenty . $currentm . $currentd;
echo $currentdate . "current date <br>";

// get the date stored in db ,compare it, if outdate then update it.
$ref_table = 'databasedate';
$fetchdata = $database->getReference($ref_table)->getChild('2022')->getValue();
if ($fetchdata > 0) {
    $dbdate = $fetchdata['dbdate'];
    echo $dbdate . "dbdate <br>";
    if ($dbdate < $currentdate) {
        $updateData = [
            'dbdate' => $currentdate,
        ];
        $ref_table = 'databasedate/2022';
        $database->getReference($ref_table)
            ->update($updateData);
        $updatesub = true;
    }
}

// decrement all subcription left of all store
if ($updatesub == true) {
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
            $database->getReference($ref_table)
                ->update($updateData);
        }
    }
} else {
    echo "no decrement";
    exit();
}
