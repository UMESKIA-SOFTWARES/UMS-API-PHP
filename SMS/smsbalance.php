<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.umeskiasoftwares.com/api/v1/smsbalance',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
        "api_key":"XXXXXXXXXXXXXXX=",
        "email":"example@gmail.com"
      }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
));
$response = curl_exec($curl);
curl_close($curl);
//CHECK CURL ERROR
if (curl_errno($curl)) {
    echo 'Curl error: ' . curl_error($curl);
} else {
    $data = json_decode($response);
    $success = $data->success;
    if ($success == "200") {
        $creditBalance = $data->creditBalance;
        echo "Sms Balance retrieved successfully, with creditBalance: " . $creditBalance;
    } else {
        $ResultCode = $data->ResultCode;
        $errorMessage = $data->errorMessage;
        echo "Sms not sent, with ResultCode: " . $ResultCode . " and errorMessage: " . $errorMessage . "";
    }
}
