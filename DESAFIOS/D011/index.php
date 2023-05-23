<html>
  <head>
    <title>Reajustador de Preço</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
  <?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $valor = $_POST["valor"];
                $porcentagem = $_POST["porcentagem"];
                $novo_valor = $valor * (1 + $porcentagem/ 100);
                
            }
            ?>   
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

    <section>
    <h2>Resultado do Reajuste</h2>
        <?php
            
        
            echo "O Produto que custava <strong> R$ " . number_format($valor, 2, ',', '.') . "</strong>, 
            com um aumento de <strong>" . $porcentagem . "%  de aumento </strong>, vai passar a custar R$ <strong>" . number_format($novo_valor, 2, ',', '.') ."</strong>.";
        
        ?>
    <script>
      function updateTextInput(val) {
        document.getElementById('porcentagem_text').value = val + "%";
      }
    </script>
</section>
  </body>
</html>
