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


    <main>
        <h1>Informe um número:</h1>
        <form action="" method="get">
        <label for="num">Número</label>
        <input type="number" name="num" id="">
        <input type="submit" value="Calcular Raízes">
        </form>

    </main>
    
    <section>
        <h2>Resultado Final</h2>
        <?php 

            $numero = $_GET['num'] ?? 0;
            $raiz_quadrada = sqrt($numero);

            echo "Analisando o <strong>número $numero</strong>, temos:";

            echo "<ul><li>A sua raíz quadrada é <strong>".number_format($raiz_quadrada,3,",",".")."</strong></li></ul>";

            echo ""
        ?>

    </section>

</body>
</html>