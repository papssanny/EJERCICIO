<!DOCTYPE html>
<html>
<body>

<h2>Conversor de Moneda</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Desde: <select name="moneda_desde">
    <option value="dolar">Dólar (USD)</option>
    <option value="euro">Euro (EUR)</option>
  </select>
  A: <select name="moneda_hasta">
    <option value="dolar">Dólar (USD)</option>
    <option value="euro">Euro (EUR)</option>
  </select>
  Cantidad: <input type="number" name="cantidad" step="0.01" required>
  <input type="submit" name="convertir" value="Convertir">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $moneda_desde = $_POST["moneda_desde"];
    $moneda_hasta = $_POST["moneda_hasta"];
    $cantidad = floatval($_POST["cantidad"]);

    // Tasa de cambio fija: 1 USD = 0.85 EUR
    $tasa_cambio = 0.85;

    if ($moneda_desde == "dolar" && $moneda_hasta == "euro") {
        $resultado = $cantidad * $tasa_cambio;
        echo "<p>$cantidad $ deseas convertir a euros. El resultado es: $resultado €</p>";
    } else if ($moneda_desde == "euro" && $moneda_hasta == "dolar") {
        $resultado = $cantidad / $tasa_cambio;
        echo "<p>$cantidad $ deseas convertir a dólares. El resultado es: $resultado $</p>";
    } else {
        echo "<p>No se pudo realizar la conversión.</p>";
    }
}
?>

</body>
</html>