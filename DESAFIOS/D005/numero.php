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
        <h1>Analisador de numero Real</h1>
        <p>

        <?php 
        
        $num = $_POST["numero"] ?? 0;


        $int = (int) $num;
        $fra = $num - $int;

        echo "<ul><li> A parte inteira do número é: <strong> ".number_format($int,0,",",".").
        "</strong></li></ul>";

        echo "<ul><li> A parte fracionária do número é: <strong>" . number_format($fra,3,",",".")."</strong></li></ul>";

        
        
        
        ?>


        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>    



</body>
</html>


<!-- Vc escreveu:

"A Parte fracionada do numero é: " . "<strong>" .number_format($parte_fracionada ,3). "</strong>"  . "<br>";

E isso é exatamente a msma coisa q:

"A Parte fracionada do numero é: <strong>" . number_format($parte_fracionada , 3) . "</strong><br>"; -->