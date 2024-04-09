<?php
echo "Ingresa el primer número: ";
$num1 = trim(readline());

echo "Ingresa el segundo número: ";
$num2 = trim(readline());

echo "Ingresa el tercer número: ";
$num3 = trim(readline());

$mayor = $num1; 


if ($num2 > $mayor) {
    $mayor = $num2;
}


if ($num3 > $mayor) {
    $mayor = $num3;
}

echo "El número mayor es: " . $mayor;
?>