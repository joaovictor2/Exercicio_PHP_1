<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<title>Calcular IMC</title>
</head>
<body>
	<div style="width:47%; height:auto; border:1px solid #1E90FF; border-radius: 10px; float:center; margin:50px auto auto auto;">
		<div style="margin:10px;">
			<form action="tabuada.php" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Número:</label>
					<input type="number" name="numero" class="form-control" id="formGroupExampleInput">
			 	</div>
				<button type="submit" class="btn btn-primary">Enviar</button>
				<a class="btn btn-primary" href="index.php" role="button">Voltar ao Menu</a>
				<br><br>
			</form>

			<?php
				$n = $_POST['numero'];

				if($n == null){
				 	echo "Dados não informados.";
				}else {
					echo "Tabuada:<br>";
					for($i=1; $i<=10; $i++){
						echo $i;
						echo " * ";
						echo $n;
						echo " = ";
						echo $i * $n;
						echo "<br>";
					}
				}
			?>
		</div>
	</div>
</body>
</html>
