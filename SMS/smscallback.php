<?php
header("Content-Type: application/json");
$smsCallbackResponse = file_get_contents('php://input');
$logFile = "smsResponse.json";
$log = fopen($logFile, "a");
fwrite($log, $smsCallbackResponse);
fclose($log);
$content = json_decode($smsCallbackResponse);
