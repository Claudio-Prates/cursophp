<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
    $Dividendo = $_GET['d1'] ?? 0;
    $Divisor = $_GET['d2'] ?? 1;

?>




    <main>
        <h1>Anatomia de uma Divisão</h1>
    <form action="" method="get">
        <label for="d1">Dividendo</label>
        <input type="number" name="d1" id="d1" min="0" value="<?=$Dividendo?>">
        <label for="d2">Divisor</label>
        <input type="number" name="d2" id="d2" min = "1" value="<?=$Divisor?>">
        <input type="submit" value="Analisar">

    </form>
    </main>

    <section>

    <h2>Estrutura da Divisão</h2>
    <?php 

    // cálculos

    $quociente = intdiv($Dividendo , $Divisor);
    $resto = $Dividendo % $Divisor;
    ?>
    <table class="divisao">

<tr>

    <td><?=$Dividendo?></td>
    <td><?=$Divisor?></td>
</tr>

    <tr>
    <td><?=$resto?></td>
    <td><?=$quociente?></td>
    </tr>
</table>
    

    </section>
</body>
</html>