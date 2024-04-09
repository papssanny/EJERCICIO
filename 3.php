<body>
    <title>Calcular el numero mayor</title>
    <p>acontinuacion ingresara 3 numeros</p>
    <p>el programa le mostrara el mayor de los 3</p>
    <form action="ejercicio3.php" method="post">
        Primer numero: <input type="number" name="num1">
        <br>
        <br>
        segundo digito:<input type="number" name="num2">
        <br>
        <br>
        tercer digito:<input type="number" name="num3">
        <input type="submit" name="submit" value="NUMERO MAYOR">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if ($num1 > $num2 && $num1 > $num3) {
        echo "El número mayor es " . $num1;
    } elseif ($num2 > $num1 && $num2 > $num3) {
        echo "El número mayor es " . $num2;
    } elseif ($num3 > $num1 && $num3 > $num2) {
        echo "El número mayor es " . $num3;
    } else {
        echo "Los números son iguales";
    }
}
?>