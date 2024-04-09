<!DOCTYPE html>
<html>
<head>
	<title>Validación de Edad</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<label for="edad">Ingresa tu edad:</label>
		<input type="number" id="edad" name="edad" required>
		<input type="submit" value="Verificar">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$edad = $_POST["edad"];
		if ($edad >= 18) {
			echo "Eres mayor de edad.";
		} else {
			echo "Lo siento, no eres mayor de edad.";
		}
	}
	?>
</body>
</html>