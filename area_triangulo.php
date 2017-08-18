<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<title>Calcular Área do Triângulo</title>
</head>
<body>
	<div style="width:47%; height:auto; border:1px solid #1E90FF; border-radius: 10px; float:center; margin:50px auto auto auto;">
		<div style="margin:10px;">
			<form action="area_triangulo.php" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Tamanho do lado A:</label>
					<input type="number" name="a" class="form-control" id="formGroupExampleInput">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tamanho do lado B:</label>
					<input type="number" name="b" class="form-control" id="formGroupExampleInput">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tamanho do lado C:</label>
					<input type="number" name="c" class="form-control" id="formGroupExampleInput">
				</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
					<a class="btn btn-primary" href="index.php" role="button">Voltar ao Menu</a>
					<br><br>
			</form>

			<?php
				$ladoA = $_POST['a'];
				$ladoB = $_POST['b'];
				$ladoC = $_POST['c'];

				if($ladoA == null || $ladoB == null || $ladoC == null){
					echo "Dados não informados";
				}else {
					if($ladoA == $ladoB && $ladoA == $ladoC && $ladoB == $ladoC){
						echo "Triângulo Equilátero";
					}else {
						if ($ladoA == $ladoB || $ladoA == $ladoC || $ladoC == $ladoB){
							echo "Triângulo Isósceles";
						}else {
							echo "Triângulo Escaleno";
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>
