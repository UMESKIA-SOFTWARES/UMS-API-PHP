<?php
  $Url = "https://api.umeskiasoftwares.com/api/v1/sms";
  $ch = curl_init($Url);
  $data = array(
    'api_key' => 'XXXXXXXXXXXXXXXXXX=', //Replace with your api key here
    'email' => 'example@gmail.com', //Replace with your email
    'Sender_Id' => '23107', //If you have a custom sender id, use it here OR Use the default sender id: 23107
    'message' => "UMS SMS Api Test Message",
    'phone' => "0768XXXXX60", //Phone number should be in the format: 0768XXXXX60 OR 254768XXXXX60 OR 254168XXXXX60
  );
  $payload = json_encode($data);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept:application/json'));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  //CHECK CURL ERROR
  if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
  }else{
  curl_close($ch);
  $newResonse = str_replace(array('[', ']'), '',  $result);
  $data = json_decode($newResonse);
  $success = $data->success;
  if($success == "200"){
    $request_id = $data->request_id;
    $message = $data->message;
    echo "Sms sent successfully, with request_id: " . $request_id . " and message: " . $message . "";
  }else{
    $ResultCode = $data->ResultCode;
    $errorMessage = $data->errorMessage;
    echo "Sms not sent, with ResultCode: " . $ResultCode . " and errorMessage: " . $errorMessage . "";
  }
}