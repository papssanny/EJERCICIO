<!DOCTYPE html>
<html>
<head>
    <title>Validación de Correo Electrónico</title>
</head>
<body>
    <h1>Validación de Correo Electrónico</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Correo Electrónico: <input type="text" name="email" required>
        <input type="submit" name="submit" value="Valida">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>El correo electrónico '$email' es válido.</p>";
        } else {
            echo "<p>El correo electrónico '$email' no es válido.</p>";
        }
    }
    ?>
</body>
</html>