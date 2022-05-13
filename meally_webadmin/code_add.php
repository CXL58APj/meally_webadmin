<?php
session_start();
include('dbcon.php');

//randomizers
$timea = rand(1, 12);
$timeb = rand(1, 59);
$datem = rand(1, 3);
$datedate = rand(1, 30);
$i = rand(1, 10);
if ($i > 5) {
    $amorpm = "A.M";
} else {
    $amorpm = "P.M";
}
// submitted doc date randomizer
$datem2 = rand(3, 5);
$datedate2 = rand(1, 30);
$timea2 = rand(1, 12);
$timeb2 = rand(1, 59);


if (isset($_POST['save'])) {
    $storeaddress = $_POST['storeaddress'];
    $storebin = "09" . rand(111111111, 999999999);
    $storename = $_POST['storename'];
    $storeowner = $_POST['storeowner'];
    $storeemail = str_replace(' ', '', strtolower($_POST['storeowner']));

    $postData = [
        'storeaddress' => $storeaddress,
        'storebin' => $storebin,
        'storename' => $storename,
        'storeowner' => $storeowner,
        'storeemail' => $storeemail . "@gmail.com",
        'status' => 'review',
        'dtipermit' => 'uploads/storerequirements/DTI_Permit.png',
        'bussinesspermit' => 'uploads/storerequirements/Business_Permit.jpg',
        'barangayclearance' => 'uploads/storerequirements/Baranggay_Clearance.jpg',
        'validid' => 'uploads/storerequirements/Valid_ID.png',
        'dateregistered' => "$datem/$datedate/2022 $timea:$timeb $amorpm",
        'datesubmitteddoc' => "$datem/$datedate/2022 $timea:$timeb $amorpm",
        'subend' => rand(10, 60),
        'storetwitter' => 'javascript:;',
        'storefb' => 'javascript:;',
        'storeig' => 'javascript:;',
        'storelat' => '14.756578',
        'storelong' => '121.044977',

    ];
    $ref_table = "stores";
    $postRef_result = $database->getReference($ref_table)->push($postData);


    if ($postRef_result) {
        $_SESSION['status'] = "store added succesfully";
        header('Location: add.php');
        exit();
    } else {
        $_SESSION['status'] = "store not added succesfully";
    }
}
