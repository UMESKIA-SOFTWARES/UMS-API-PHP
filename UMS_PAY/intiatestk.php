<?php
$api_key = "YOUR_API_KEY";
$email = "YOUR_EMAIL";
$account_id = "YOUR_ACCOUNT_ID";
$amount = "10";
$msisdn = "254712345678";
$reference = "675432";
$payload = json_encode(array(
    "api_key" => $api_key,
    "email" => $email,
    'account_id' => $account_id,
    "amount" => $amount,
    "msisdn" => $msisdn,
    "reference" => $reference,
));
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.umeskiasoftwares.com/api/v1/intiatestk',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
    ),
));
$response = curl_exec($curl);
if ($response === false) {
    echo 'Curl error: ' . curl_error($curl);
} else {
    echo $response;
}
curl_close($curl);
