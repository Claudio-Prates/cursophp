<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    // Área de declarações
        $numero = $_GET['num'] ?? 1;
    
    ?>

    <main>
        <h1>Informe um número:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Número</label>
        <input type="number" name="num" id="num" <?=$numero?>">
        <input type="submit" value="Calcular Raízes">
        </form>

    </main>
    
    <section>
        <h2>Resultado Final</h2>
        <?php 

            
            
            $rq= sqrt($numero);
            $rc = pow($numero, 1/3);

            echo "Analisando o <strong>número $numero</strong>, temos:";

            echo "<ul><li>A sua raíz quadrada é <strong>".number_format($rq,2,",",".")."</strong></li></ul>";

            echo "<ul><li> A sua raíz cúbica é <strong>".number_format($rc,2,",",".")." </strong></li></ul>"
        ?>

    </section>

</body>
</html>