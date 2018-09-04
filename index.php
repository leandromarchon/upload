<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP - Upload de arquivos</title>
	</head>
	<body>
		<form action="processa.php" method="post" enctype="multipart/form-data">
			<label for="imagem">Imagem: </label>
			<input type="file" name="imagem" id="imagem">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>