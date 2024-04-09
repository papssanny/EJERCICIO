<!DOCTYPE html>
<html>
<body>

<h2>Calculadora de IMC</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Peso (kg): <input type="num" name="peso" step="0.1" required>
  Altura (m): <input type="numr" name="altura" step="0.01" required>
  <input type="submit" name="calcular" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = floatval($_POST["peso"]);
    $altura = floatval($_POST["altura"]);

    $imc = $peso / pow($altura, 2);

    echo "<p>Tu IMC es: " . number_format($imc, 2) . "</p>";

    if ($imc < 18.5) {
        echo "<p>Eres bajo de peso.</p>";
    } else if ($imc >= 18.5 && $imc < 24.9) {
        echo "<p>Tienes un peso saludable.</p>";
    } else if ($imc >= 25 && $imc < 29.9) {
        echo "<p>Eres sobrepeso.</p>";
    } else if ($imc >= 30) {
        echo "<p>Eres obeso.</p>";
    }
}
?>

</body>
</html>