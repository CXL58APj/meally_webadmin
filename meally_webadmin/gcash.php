<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://g.payx.ph/payment_request',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array(
        'x-public-key' => '...',
        'amount' => '1',
        'description' => 'Payment for monthly subscription',
        'customername' => 'Juan Dela Cruz',
        'customeremail' => 'juandelacruz@gmail.com',
        'customermobile' => '09123456789',
        'merchantlogourl' => '..',
        'webhookfailurl' => '..'

    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
