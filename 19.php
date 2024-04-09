<!DOCTYPE html>
<html>
<head>
    <title>Palabras Prohibidas en un Texto</title>
</head>
<body>
    <h1>Palabras Prohibidas en un Texto</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Texto: <textarea name="texto" rows="5" required></textarea><br>
        Palabras prohibidas (separadas por comas): <input type="text" name="palabras_prohibidas" required><br>
        <input type="submit" name="submit" value="Procesar">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $texto = $_POST['texto'];
        $palabras_prohibidas = explode(",", $_POST['palabras_prohibidas']);

        // Reemplazar las palabras prohibidas por asteriscos
        foreach ($palabras_prohibidas as $palabra) {
            $palabra = trim($palabra); // Eliminar espacios en blanco al inicio y al final
            $patron = "/\b" . preg_quote($palabra, "/") . "\b/i"; // Patrón para buscar la palabra completa
            $texto = preg_replace($patron, str_repeat("*", strlen($palabra)), $texto);
        }

        echo "<p>Texto con palabras prohibidas reemplazadas:</p>";
        echo "<p>$texto</p>";
    }
    ?>
</body>
</html>