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
    $salario = $_GET['sal'] ?? 0;
    $salario_minimo = 1100;
?>

<main>
    <h1>Informe seu Salario</h1>
    <form action="" method="get">
        <label for="sal">Salário (R$)</label>
        <input type="number" name="sal" id="sal"  step="0.01" min="0" value="<?=$salario?>">
        <p>Considerando o salário mínimo de <strong>R$ <?=number_format($salario_minimo, 2, ',', '.')?></strong></p>
        <input type="submit" value="Calcular">
    </form>
</main>


<section>
    <h2>Resultado Final</h2>
    
    <?php 
    $num_salarios_minimos = round($salario /$salario_minimo , 0);
    echo "Quem recebe um salário de R$". number_format($salario , 2,",","."). " ganha " . "<strong>" . $num_salarios_minimos, " salários mínimos </strong><br> ";
    ?>
</section>
</body>
</html>

<!-- <?php 
        // echo "Considerando o salário mínimo de R$ " . number_format($salario_minimo, 2, ',', '.') . "<br>";
        // $num_salarios_minimos = round($salario / $salario_minimo, 1);
        // echo "Quem recebe um salário de R$ " . number_format($salario, 2, ',', '.') . " ganha " . $num_salarios_minimos . " salários mínimos";
    ?> -->