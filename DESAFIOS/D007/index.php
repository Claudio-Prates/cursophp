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
    $minimo = 1380.60;
    $salario = $_GET['sal'] ?? $minimo;
    
?>

<main>
    <h1>Informe seu Salario</h1>
    <form action="" method="get">
        <label for="sal">Salário (R$)</label>
        <input type="number" name="sal" id="sal"  step="0.01" min="0" value="<?=$salario?>">
        <p>Considerando o salário mínimo de <strong>R$ <?=number_format($minimo, 2, ',', '.')?></strong></p>
        <input type="submit" value="Calcular">
    </form>
</main>


<section>
    <h2>Resultado Final</h2>
    <?php 
        $tot = intdiv($salario , $minimo);
        $dif = $salario % $minimo;

        echo "<p> Quem recebe um salário de R\$".number_format($salario, 2,",","."). " ganha <strong>$tot salários mínimos </strong> + R\$".number_format($dif , 2, ",",".").".</p>"



    ?>
</section>


</body>
</html>


        <!-- $num_salarios_minimos = round($salario / $salario_minimo, 0);
        $falta_para_6_salarios_minimos = ($salario ) - $salario_minimo * 6;
       echo "Quem recebe um salário de R$ " . number_format($salario, 2, ",", ".") . " ganha " . "<strong> $num_salarios_minimos  salários mínimos </strong> R$  + <br>" . number_format($falta_para_6_salarios_minimos, 2, ",", "."); -->
 