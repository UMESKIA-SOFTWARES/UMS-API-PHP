<?php
  $Url = "https://api.umeskiasoftwares.com/api/v1/sms";
  $ch = curl_init($Url);
  $data = array(
    'api_key' => 'SVQ4WVpPQUQ6NnpicDJsMm8=',
    'email' => 'example@gmail.com',
    'Sender_Id' => '23107',
    'message' => "076***8060",
    'phone' => "testing",
  );
  $payload = json_encode($data);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept:application/json'));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  curl_close($ch);
  
