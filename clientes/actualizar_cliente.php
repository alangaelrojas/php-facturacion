<?php
$ch = curl_init();
$fields = [
    "nombre" => "Cliente prueba",
    "apellidos" => "probando",
    "email" => "prueba@outlook.com",
    "telefono" => "33 3877 7741",
    "razons" => "Cliente Prueba",
    "rfc" => "XAXX010101002",
    "calle" => "Av. Juarez",
    "numero_exterior" => 1234,
    "numero_interior" => "",
    "codpos" => 44640,
    "colonia" => "Centro",
    "estado" => "Jalisco",
    "ciudad" => "Tepatitlán",
    "delegacion" => ""
   ];


$jsonfield = json_encode($fields);

curl_setopt($ch, CURLOPT_URL, "http://devfactura.in/api/v1/clients/5da738dceb1e6/update");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonfield);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "F-PLUGIN: " . '9d4095c8f7ed5785cb14c0e3b033eeb8252416ed',
    "F-Api-Key: ". 'JDJ5JDEwJGtuNTF0STYyUlRoYlU4WXplbzZNQk9Ebk9WOVdPUjliQXlsZXVzWW5JYzlNdVFqRkMyQ0Q2',
    "F-Secret-Key: " . 'JDJ5JDEwJFJMQnhkRnMwcHhoYnN3MVBDeG5SMy4yL0FHbTg0d2pWSEMuTkI3UWRGbmMwc2doWFRxUTRL'
));

$response = curl_exec($ch);

return die($response);

curl_close($ch);

?>