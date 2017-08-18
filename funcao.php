<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<title>Calcular Área do Triângulo</title>
</head>
<body>
	<div style="width:47%; height:auto; border:1px solid #1E90FF; border-radius: 10px; float:center; margin:50px auto auto auto;">
		<div style="margin:10px;">
			<form action="funcao.php" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Valor de A:</label>
					<input type="number" name="a" class="form-control" id="formGroupExampleInput">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Valor de B:</label>
					<input type="number" name="b" class="form-control" id="formGroupExampleInput">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Valor de C:</label>
					<input type="number" name="c" class="form-control" id="formGroupExampleInput">
				</div>
				<button type="submit" class="btn btn-primary">Calcular</button>
				<a class="btn btn-primary" href="index.php" role="button">Voltar ao Menu</a>
				<br><br>
			</form>

			<?php
				$a = $_POST['a'];
				$b = $_POST['b'];
				$c = $_POST['c'];

				if($a == null || $b == null || $c == null){
					echo "Dados não informados.";
				} else{
					$delta = pow($b, 2) -4 * $a * $c;

					if($delta < 0){
						echo "Delta é negativo. Não há resultado.";
					} else{
						if($delta == 0){
							$x = (-1 * $b) / (2 * $a);
							echo "O valor de Delta é 0.<br> O valor de X é ";
							if(is_int($x) == true){
								echo number_format($x, '0', '', '.');
							} else{
								echo number_format($x, '2', ',', '.');
							}
						} else{
							$x1 = ((-1 * $b) + sqrt($delta)) / (2 * $a);
							$x2 = ((-1 * $b) - sqrt($delta)) / (2 * $a);
							echo "O valor de Delta é ";
							if(is_int($delta) == true){
								echo number_format($delta, '0', '', '.');
							} else{
								echo number_format($delta, '2', ',', '.');
							}
							echo ".<br> O valor de X1 é ";
							if(is_int($x1) == true){
								echo number_format($x1, '0', '', '.');
							} else{
								echo number_format($x1, '2', ',', '.');
							}
							echo ".<br> O valor de X2 é ";
							if(is_int($x2) == true){
								echo number_format($x2, '0', '', '.');
							} else{
								echo number_format($x2, '2', ',', '.');
							}
								echo ".";
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>
