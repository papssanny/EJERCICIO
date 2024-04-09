<!DOCTYPE html>
<html>
<body>

<h2>Tabla de multiplicar del número <?php echo $_POST['numero']; ?></h2>

<table>
  <tr>
    <th></th>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<th>" . $i . "</th>";
    }
    ?>
  </tr>
  <?php
  for ($i = 1; $i <= 10; $i++) {
      echo "<tr>";
      echo "<td>" . $i . "</td>";
      for ($j = 1; $j <= 10; $j++) {
          echo "<td>" . ($i * $j) . "</td>";
      }
      echo "</tr>";
  }
  ?>
</table>

</body>
</html>