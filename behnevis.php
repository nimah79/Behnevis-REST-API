<?php

/**
 * Simple Behnevis.com wrapper
 * By NimaH79
 * NimaH79.ir
 * @NimaH79
 */

function behnevis($text)
{
    $ch = curl_init('https://9mkhzfaym3.execute-api.us-east-1.amazonaws.com/production/convert');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => $text
    ]);
    $result = curl_exec($ch);

    return implode(' ', array_values(json_decode($result, true)));
}
