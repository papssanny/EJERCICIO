<!DOCTYPE html>
<html>
<head>
    <title>Manipulación de Cadenas</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="cadena">Ingresa una cadena de texto:</label><br>
        <input type="text" id="cadena" name="cadena" required><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST["cadena"];
        echo "Cadena en mayúsculas: ". strtoupper($cadena). "<br>";
        echo "Cadena en minúsculas: ". strtolower($cadena). "<br>";
        echo "Cantidad de caracteres: ". strlen($cadena). "<br>";
    }
   ?>
</body>
</html>