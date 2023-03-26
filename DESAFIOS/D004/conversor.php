<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    
<?php 
    $url = 'https://www3.bcb.gov.br/wssgs/services/FachadaWSSGS';
    $params = array(
        'method' => 'getUltimoValorVO',
        'codigoSerie' => 1
    );
    $query = http_build_query($params);
    $requestUrl = "$url?$query";
    $response = file_get_contents($requestUrl);
    
    $xml = simplexml_load_string($response);
    $dolar = (float) $xml->SERIE->VALOR;
    echo 'Cotação do dólar: R$ ' . $dolar;
    
?>
    </main>
</body>
</html>





