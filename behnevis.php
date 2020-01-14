<?php

/**
  * Behnevis REST API
  * By NimaH79
  * NimaH79.ir
  * @NimaH79
 */

header('Content-Type: application/json');

if (empty($_REQUEST['text'])) {
    die(json_encode(['error' => 'parameter url is required']));
}

$ch = curl_init('https://9mkhzfaym3.execute-api.us-east-1.amazonaws.com/production/convert');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => $_REQUEST['text']
]);
$result = curl_exec($ch);
curl_close($ch);
echo implode(' ', array_values(json_decode($result, true)));
