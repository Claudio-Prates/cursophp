<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>

        <h1>Trabalhando com múmeros aleatórios</h1>
<?php 

    $min = 0;
    $max = 100;
    $numero = mt_rand($min,$max);

        echo "Gerando um número aleatório entre 0 e 100...
         <br> O número sorteado foi <strong>$numero</strong>";


    

?>



        
<button onclick="javacript:document.location.reload()">&#x1F504; Gerar Outro</button>



    
    </main>
</body>

</html>