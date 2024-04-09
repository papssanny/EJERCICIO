<!DOCTYPE html>
<html>
<head>
	<title>Contador de Caracteres</title>
</head>

<body>

<form action="" method="post">
	<label for="texto">Ingresa un texto:</label><br>
	<textarea name="texto" id="texto" cols="30" rows="10"></textarea><br>
	<input type="submit" name="enviar" value="Contar caracteres">
</form>

<?php
if (isset($_POST['enviar'])) {
	$texto = $_POST['texto'];
	$longitud = strlen(str_replace(' ', '', $texto));
	echo "La longitud del texto es: " . $longitud;
}
?>

</body>
</html>