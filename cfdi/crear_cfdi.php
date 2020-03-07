<?php


for ($x = 1; $x <= 1; $x++) {
    $Conceptos[] = [
        'ClaveProdServ' => '81112107',
        'Cantidad' => '1',
        'ClaveUnidad' => 'E48',
        'Unidad' => 'Unidad de servicio',
        'ValorUnitario' => '1',
        'Descripcion' => 'Desarrollo a la medida',
        'Descuento' => '0',
        'Impuestos' => [
            'Traslados' => [
                ['Base' => '100', 'Impuesto' => '002', 'TipoFactor' => 'Tasa', 'TasaOCuota' => '0.160000', 'Importe' => '16'],
            ]
        ],
    ];
}

$ch = curl_init();
$fields = [
    "Receptor" => ["UID" => "5da5dafba7ca1"],
    "TipoDocumento" => "factura",
    "UsoCFDI" => "G03",
    "Redondeo" => 2,
    "Conceptos" => $Conceptos,
    "FormaPago" => "01",
    "MetodoPago" => 'PUE',
    "Moneda" => "MXN",
    "CondicionesDePago" => "Pago en una sola exhibición",
    "Serie" => 2019,
    "EnviarCorreo" => 'true',
    "InvoiceComments" => ""
];

$jsonfield = json_encode($fields);


curl_setopt($ch, CURLOPT_URL, "http://devfactura.in/api/v3/cfdi33/create");
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
