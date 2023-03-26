<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v.01</h1>
    <?php

        // Cotação copiada do Google
        $cotacao = 5.33;

        // Quantos $$ você Tem?

        $real = $_REQUEST["din"] ?? 0;

        // Equivalencia em Dolar

        $dolar = $real / $cotacao;

        // Mostrar o resultado

        // echo "Seus R\$" .number_format($real ,2, ",",".") . " equivalem a US\$" . number_format($dolar ,2, ",",".");


        // Formatação de moeda com internalização!


        // Biblioteca intl (Internallization PHP)

        $padrão = numfmt_create("ru-RU", NumberFormatter::CURRENCY);


        echo "<p> Seus " . numfmt_format_currency($padrão , $real , "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão ,$dolar ,"USD") . "</strong></p>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>



