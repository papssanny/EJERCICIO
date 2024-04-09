<!DOCTYPE html>
<html>
<head>
    <title>Sorteo</title>
</head>
<body>
    <h1>Sorteo</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nombre: <input type="text" name="nombre" required><br>
        <input type="submit" name="submit" value="Participar">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];

        $numero_aleatorio = rand(1, 10);

        if ($numero_aleatorio == 5) {
            echo "<p>¡Felicidades, $nombre! ¡Has ganado el sorteo!</p>";
        } else {
            echo "<p>Lo siento, $nombre. No has ganado esta vez. Mejor suerte la próxima vez.</p>";
        }
    }
    ?>
</body>
</html>