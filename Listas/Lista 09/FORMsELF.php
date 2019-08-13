<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Abadaba</title>
	<meta charset="utf-8">
</head>
<body>
	<?php if (isset($_POST['Enviar'])) {
		echo var_dump($_POST);
		is_int($_POST['idade']);
	} 
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label for="nome">Nome</label>
		<input type="text" id="nome" name="nome">
		<label for="idade">Idade</label>
		<input type="number" id="idade" name="idade">

		<input type="submit" name="Enviar">
	</form>
</body>
</html>