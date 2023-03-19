<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>

    </header>
    <main>
        <?php 
        
           $nome = $_REQUEST["nome"] ?? "sem nome";
           $sobrenome = $_REQUEST["sobrenome"] ?? "Desconhecido";
           echo "<p>É um prazer te conhecer , <strong>$nome $sobrenome </strong>!, Este é o meu site!";
        ?>

        <p><a href="Javascript:history.go(-1)">voltar para á pagina</a></p>
    </main>
</script>
</body>
</html>