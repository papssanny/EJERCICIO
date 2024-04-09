<!DOCTYPE html>
<html>
<head>
    <title>Convertidor de Temperatura</title>
</head>
<body>
    <h1>Convertir Temperaturas</h1>

    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="temperatura">Ingresa la temperatura:</label>
        <input type="number" name="temperatura" id="temperatura" step="0.01" required>

        
        <label for="unidad">Unidad:</label>
        <select name="unidad" id="unidad">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select>

        <input type="submit" name="enviar" value="Convertir">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $temperatura_ingresada = $_POST["temperatura"];
        $unidad_seleccionada = $_POST["unidad"];

        
        if (is_numeric($temperatura_ingresada)) {
            
            if ($unidad_seleccionada == "celsius") {
                $fahrenheit = ($temperatura_ingresada * 9/5) + 32;
                echo "<p>" . htmlspecialchars($temperatura_ingresada) . " °C = " . htmlspecialchars($fahrenheit) . " °F</p>";
            }
           
            elseif ($unidad_seleccionada == "fahrenheit") {
                $celsius = ($temperatura_ingresada - 32) * 5/9;
                echo "<p>" . htmlspecialchars($temperatura_ingresada) . " °F = " . htmlspecialchars($celsius) . " °C</p>";
            }
          
            else {
                echo "<p>Error: Unidad no válida.</p>";
            }
        } else {
            echo "<p>Error: La temperatura ingresada no es un número válido.</p>";
        }
    }
    ?>
</body>
</html>