<!DOCTYPE html>
<html>
<head>
	<title>Reajustador de Preço</title>
</head>
<body>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
		<label for="valor">Valor do produto:</label>
		<input type="text" name="valor" id="valor" required><br><br>
		<label for="porcentagem">Porcentagem de reajuste:</label>
		<input type="range" name="porcentagem" id="porcentagem" min="0" max="100" value="0" step="1" onchange="atualizarValor()"><br><br>
		<label for="novo_valor">Novo valor:</label>
		<input type="text" name="novo_valor" id="novo_valor" readonly><br><br>
		<input type="submit" value="Calcular">
	</form>

	<script>
		function atualizarValor() {
			var valor = document.getElementById("valor").value;
			var porcentagem = document.getElementById("porcentagem").value;
			var novo_valor = (valor * (1 + (porcentagem / 100))).toFixed(2);
			document.getElementById("novo_valor").value = novo_valor;
		}
	</script>
    <section>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST["valor"]) && isset($_POST["porcentagem"])){
		$valor = $_POST["valor"];
		$porcentagem = $_POST["porcentagem"];
		$novo_valor = $valor * (1 + ($porcentagem / 100));
		echo "O Produto que custava R$ " . number_format($valor, 2, ',', '.') . ", com um aumento de " . $porcentagem . "%, vai passar a custar R$ " . number_format($novo_valor, 2, ',', '.') . ".";
	} else {
		echo "Preencha os campos corretamente.";
	}
}
?>        
        
            
        
</section>
</body>
</html>
