<?php

$url = 'https://api.rosette.com/rest/v1/ping';
$binding_version = '1.1.2';
$headers = array("X-RosetteAPI-Key: $key",
    "Content-Type: application/json",
    "Accept: application/json",
    "Accept-Encoding: gzip",
    "User-Agent: RosetteAPIPHP/" . $binding_version,
    "X-RosetteAPI-Binding: php",
    "X-RosetteAPI-Binding-Version: " . $binding_version);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);
var_dump($response);

// var_dump($headers[0]);
//var_dump($ch);
// curl_close($ch);
?>
