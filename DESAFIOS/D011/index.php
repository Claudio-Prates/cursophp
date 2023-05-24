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
    <h1>Reajustador de Preço</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="valor">Preço do Produto (R$)</label>
      <input type="text" id="valor" name="valor" required>
      <label for="porcentagem">Qual será o percentual de reajuste <strong>(<?php echo $porcentagem;?>%):</strong></label>

      <input type="range" id="porcentagem" name="porcentagem" min="0" max="100" value="0" onchange="updateTextInput(this.value);">
      <input type="text" id="porcentagem_text" name="porcentagem_text" value="0%" readonly>
      <input type="submit" name="submit" value="Reajustar">
    </form>
    </main> 
</body>
</html>