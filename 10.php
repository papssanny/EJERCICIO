<!DOCTYPE html>
<html>
<body>

<h2>Inversión de una Cadena</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <label for="texto">Introduce una cadena de texto:</label><br>
  <input type="text" id="texto" name="texto" required><br>
  <input type="submit" value="Mostrar en orden inverso">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $texto = $_POST["texto"];
  $textoInverso = strrev($texto);
  echo "<p>La cadena inversa es: $textoInverso</p>";
}
?>

</body>
</html>
