<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h2>Calculadora de Tempo</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tempo = $_POST["tempo"] ?? 0;

        $semanas = floor($tempo / (7 * 24 * 60 * 60));
        $dias = floor(($tempo % (7 * 24 * 60 * 60)) / (24 * 60 * 60));
        $horas = floor(($tempo % (24 * 60 * 60)) / (60 * 60));
        $minutos = floor(($tempo % (60 * 60)) / 60);
        $segundos = $tempo % 60;
    ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Qual é o total de segundos?</label>
        <input type="number" name="tempo" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
    </main>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
    
        <section>
        <h2>Totalizando Tudo</h2>
        <p>Analisando o número que você digitou, <strong><?php echo $tempo;?> segundos </strong> equivalem a um total de:</p>
    <?php } ?>

    
    <ul>
        <li><p>Semanas: <?php echo $semanas; ?> semanas</p></li>
        <li><p>Dias: <?php echo $dias; ?> dias</p></li>
        <li><p>Horas: <?php echo $horas; ?> horas</p></li>
        <li><p>Minutos: <?php echo $minutos; ?> minutos</p></li>
        <li><p>Segundos: <?php echo $segundos; ?> segundos</p></li>
    </ul>
    <?php
    }
    ?>

</section>


    
    
   
</body>
</html>
