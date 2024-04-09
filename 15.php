<!DOCTYPE html>
<html>
<head>
	<title>Año Bisiesto</title>
</head>

<body>

<form action="" method="post">
	<label for="anio">Ingresa un año:</label><br>
	<input type="number" name="anio" id="anio" required><br>
	<input type="submit" name="enviar" value="Verificar">
</form>

<?php
if (isset($_POST['enviar'])) {
	$anio = $_POST['anio'];
	if (esBisiesto($anio)) {
		echo "El año $anio es bisiesto.";
	} else {
		echo "El año $anio no es bisiesto.";
	}
}

function esBisiesto($anio) {
	if ($anio % 4 == 0) {
		if ($anio % 100 == 0) {
			if ($anio % 400 == 0) {
				return true;
			} else {
				return false;
			}
		} else {
			return true;
		}
	} else {
		return false;
	}
}
?>

</body>
</html>