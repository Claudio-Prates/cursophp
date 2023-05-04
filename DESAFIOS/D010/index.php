<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
		<?php
			$atual = date('Y');
			$nasc = $_GET['nasc'] ?? '2000';
			$ano = $_GET['ano'] ?? $atual;
			
		?>
    <main>
	<h1>Calculando a sua idade</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
		<label for="nasc">Em que ano você nasceu?</label>
		<input type="number" name="nasc" id="nasc" min="1900" max="<?=($atual-1)?>" value="<?=$nasc?>"><br><br>
		<label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
		<input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>"><br><br>
		<input type="submit" name="calcular" value="Qual será minha idade?">
	</form>
    </main>

	<section>
		<?php 
			$idade = $ano - $nasc;
		?>
		<h2>Resultado</h2>
		
			
			
			
		<p>Quem nasceu em <?=$nasc?> vai ter <strong> <?=$idade?> anos</strong> em <?=$atual?></p>

		
	</section>

</body>
</html>
