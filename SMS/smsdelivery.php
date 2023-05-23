<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.umeskiasoftwares.com/api/v1/smsdelivery',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
        "api_key":"XXXXXXXXXXXXXXX=",
        "email":"example@gmail.com",
        "request_id":"67483090"
      }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
));
echo $response = curl_exec($curl);
curl_close($curl);

