<?php
$api_key = "api_key_here";
$email = "email_here";
$sender_id = "UMS_SMS";
$message = "UMESKIA SOFTWARES SMS API TEST";
$phone = ""; // Replace with your actual phone number 245712345678 or 712345678 or 0712345678
$payload = json_encode(array(
    "api_key" => $api_key,
    "email" => $email,
    "Sender_Id" => $sender_id,
    "message" => $message,
    "phone" => $phone,
));
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.umeskiasoftwares.com/api/v1/sms',
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
