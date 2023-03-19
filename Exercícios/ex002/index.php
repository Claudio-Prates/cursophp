<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplos em PHP</h1>
    <?
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("D/M/Y"); // configuração de datas
        echo " E a hora é " . date("G:i:s T"); // configuração de hora
    
    ?>
</body>
</html>