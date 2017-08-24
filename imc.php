<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<title>Calcular IMC</title>
</head>
<body>
	<div style="width:47%; height:auto; border:1px solid #1E90FF; border-radius: 10px; float:center; margin:50px auto auto auto;">
		<div style="margin:10px;">
			<form action="imc.php" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Seu peso:</label>
					<input type="text" name="peso" class="form-control" id="formGroupExampleInput" placeholder="Em kilogramas (kg)">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Sua altura:</label>
					<input type="text" name="altura" class="form-control" id="formGroupExampleInput" placeholder="Em metros (m)">
				</div>
				<button type="submit" class="btn btn-primary">Enviar</button>
				<a class="btn btn-primary" href="index.php" role="button">Voltar ao Menu</a>
				<br><br>
			</form>

			<?php
				$peso = $_POST['peso'];
				$altura = $_POST['altura'];

				if($peso == null || $altura == null){
					echo "Dados não informados.";
				}else {
					$imc = $peso / ($altura * $altura);

					echo "Seu IMC é ";
					if(is_int($imc) == true){
						echo number_format($imc, '0', '', '.');
					} else{
						echo number_format($imc, '2', ',', '.');
					}
					echo ".<br>";

					if($imc < 15){
					echo "Extremamente abaixo do peso.";
					}
					if($imc >= 15 && $imc <= 16){
					echo "Gravemente abaixo do peso.";
					}
					if($imc > 16 && $imc <= 18.5){
					echo "Abaixo o peso ideal.";
					}
					if($imc > 18.5 && $imc <= 25){
					echo "Faixa de peso ideal.";
					}
					if($imc > 25 && $imc <= 30){
					echo "Sobrepeso.";
					}
					if($imc > 30 && $imc <= 35){
					echo "Obesidade grau I.";
					}
					if($imc > 35 && $imc <= 40){
					echo "Obesidade grau II (grave).";
					}
					if($imc > 40){
					echo "Obesidade grau II (grave).";
					}
				}
			?>
		</div>
	</div>
</body>
</html>
