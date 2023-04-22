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
    <?php 
    
    $nota1 = floatval($_GET['nota1']) ?? 0;
    $peso1 = floatval($_GET['peso1']) ?? 0;
    $nota2 = floatval($_GET['nota2']) ?? 0;
    $peso2 = floatval($_GET['peso2']) ?? 0;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nota1">1º valor</label>
            <input type="number" name="nota1" id="nota1" step="0.01">
            <label for="peso1">1º peso</label>
            <input type="number" name="peso1" id="peso1" step="0.01">
            <label for="nota2">2º valor</label>
            <input type="number" name="nota2" id="nota2" step="0.01">
            <label for="peso2">2º peso</label>
            <input type="number" name="peso2" id="peso2" step="0.01">
            <input type="submit" value="Calcular Médias">
    
    
    
    </form>


    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            $media_simples = ($nota1 + $nota2) / 2;
            $media_ponderada = 0;
            
            if ($peso1 != 0 || $peso2 != 0) {
                $media_ponderada = (($nota1 * $peso1) + ($nota2 * $peso2)) / ($peso1 + $peso2);
            }
            
            
            

        echo "Analisando os valores $nota1 e $nota2:";
        echo "<ul><li> A <strong> média Aritmética Simples </strong> entre os valores é ".number_format($media_simples,2,",",".")."</li></ul>";

        echo "<ul><li>  A <strong> média Aritmética Ponderada </strong> com pesos $peso1 e $peso2 é igual a <br>".number_format($media_ponderada,2,",",".")."</li></ul>";
    

?>
    </section>
    
</body>
</html>




