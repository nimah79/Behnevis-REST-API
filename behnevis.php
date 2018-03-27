<?php

/*
 * Behnevis REST API
 * By NimaH79
 * NimaH79.ir
 * @NimaH79
*/

header('Content-Type: application/json');
if(isset($_GET["text"])) {
  $ch = curl_init("http://www.behnevis.com/php/convert.php");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ["farsi" => $_GET["text"]]);
  $result = curl_exec($ch);
  curl_close($ch);
  exit('{"persian":'.json_encode($result).'}');
}
exit('{"error":"parameter url is required"}');
?>
