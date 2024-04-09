<!DOCTYPE html>
<html>
<body>

<h2>Contador de Palabras</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <label for="texto">Introduce un texto:</label><br>
  <textarea name="texto" id="texto" rows="4" cols="50" required></textarea><br>
  <input type="submit" value="Contar palabras">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $texto = $_POST["texto"];
  $numPalabras = str_word_count($texto);
  echo "<p>El texto contiene <strong>$numPalabras</strong> palabras.</p>";
}
?>

</body>
</html>