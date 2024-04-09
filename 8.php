<!DOCTYPE html>
<html>
<body>

<h2>Área y Perímetro de Figuras</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <label for="figura">Selecciona una figura:</label>
  <select id="figura" name="figura">
    <option value="circulo">Círculo</option>
    <option value="cuadrado">Cuadrado</option>
    <option value="rectangulo">Rectángulo</option>
  </select><br><br>
  
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $figura = $_POST["figura"];

    switch ($figura) {
      case "circulo":
        echo "Ingresa el radio del círculo: <input type='number' name='radio' required><br><br>";
        break;
      case "cuadrado":
        echo "Ingresa el lado del cuadrado: <input type='number' name='lado' required><br><br>";
        break;
      case "rectangulo":
        echo "Ingresa la longitud del rectángulo: <input type='number' name='longitud' required><br>";
        echo "Ingresa el ancho del rectángulo: <input type='number' name='ancho' required><br><br>";
        break;
    }
  }
  ?>

  <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $figura = $_POST["figura"];

  switch ($figura) {
    case "circulo":
      $radio = $_POST["radio"];
      $area = pi() * pow($radio, 2);
      $perimetro = 2 * pi() * $radio;
      echo "Área del círculo: " . $area . "<br>";
      echo "Perímetro del círculo: " . $perimetro . "<br>";
      break;
    case "cuadrado":
      $lado = $_POST["lado"];
      $area = pow($lado, 2);
      $perimetro = 4 * $lado;
      echo "Área del cuadrado: " . $area . "<br>";
      echo "Perímetro del cuadrado: " . $perimetro . "<br>";
      break;
    case "rectangulo":
      $longitud = $_POST["longitud"];
      $ancho = $_POST["ancho"];
      $area = $longitud * $ancho;
      $perimetro = 2 * ($longitud + $ancho);
      echo "Área del rectángulo: " . $area . "<br>";
      echo "Perímetro del rectángulo: " . $perimetro . "<br>";
      break;
  }
}
?>

</body>
</html>