<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://devfactura.in/api/v3/cfdi33/5da5dc064e7ab/cancel_status");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "F-PLUGIN: " . '9d4095c8f7ed5785cb14c0e3b033eeb8252416ed',
    "F-Api-Key: ". 'JDJ5JDEwJGtuNTF0STYyUlRoYlU4WXplbzZNQk9Ebk9WOVdPUjliQXlsZXVzWW5JYzlNdVFqRkMyQ0Q2',
    "F-Secret-Key: " . 'JDJ5JDEwJFJMQnhkRnMwcHhoYnN3MVBDeG5SMy4yL0FHbTg0d2pWSEMuTkI3UWRGbmMwc2doWFRxUTRL'
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);