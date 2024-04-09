<body>
    <title>Calculdora basica jeje</title>
    <p></p>
    <p></p>
    <form action="ejercicio2.php" method="post">
        Primer digito: <input type="number" name="num1">
        <br>
        <br>
        Operacion (+*-/): <select name="operacion" >
        <option value="divi">Division</option>
        <option value="res">Resta</option>
        <option value="sum">Suma</option>
        <option value="mul">Multiplicacion</option>
        </select>
        <br>
        <br>
        segundo digito:<input type="number" name="num2">
        <input type="submit" name="submit" value="=">
    </form>
</body>
</html>
    <?php
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
    switch ($operacion) {
        case 'sum':
            $resultado = $num1 + $num2;
            break;
        case 'res':
            $resultado = $num1 - $num2;
            break;
        case 'mul':
            $resultado = $num1 * $num2;
            break;
        case 'divi':
            $resultado = $num1 / $num2;
            break;
        
        default:
            $resultado = "sin resultados";
            break;
    }
    echo "el resultado de la operacion ".$operacion." es igual a ".$resultado;
}
?>