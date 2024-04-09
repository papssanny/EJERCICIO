<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Edad</title>
</head>
<body>
    <h1>Calculadora de Edad</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Fecha de Nacimiento: <input type="date" name="fecha_nacimiento" required>
        <input type="submit" value="Calcula Edad">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fecha_nacimiento = $_POST["fecha_nacimiento"];

        $fecha_actual = date("Y-m-d");
        $diferencia = strtotime($fecha_actual) - strtotime($fecha_nacimiento);

        $anos = floor($diferencia / (365 * 24 * 60 * 60));
        $meses = floor(($diferencia - ($anos * 365 * 24 * 60 * 60)) / (30 * 24 * 60 * 60));
        $dias = floor(($diferencia - ($anos * 365 * 24 * 60 * 60) - ($meses * 30 * 24 * 60 * 60)) / (24 * 60 * 60));

        echo "Tu edad es: $anos años, $meses meses y $dias días.";
    }
    ?>
</body>
</html>