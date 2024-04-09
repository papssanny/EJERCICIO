<?php

echo "Ingresa la temperatura: ";
$temperatura = floatval(trim(fgets(STDIN)));

echo "Selecciona la conversión:\n";
echo "1. Celsiu a Fahrenheit\n";
echo "2. Fahrenheit a Celsiu\n"; 
echo "3. Celsiu a Kelvin\n";
echo "4. Kelvin a Celsiu\n";
$opcion = intval(trim(fgets(STDIN)));


switch ($opcion) {
    case 1:
        $resultado = ($temperatura * 9/5) + 32;
        echo $temperatura . " grados Celsiu = " . $resultado . " grados Fahrenheit";
        break;
    case 2:
        $resultado = ($temperatura - 32) * 5/9;
        echo $temperatura . " grados Fahrenheit = " . $resultado . " grados Celsiu";
        break;
    case 3:
        $resultado = $temperatura + 273.15;
        echo $temperatura . " grados Celsiu = " . $resultado . " grados Kelvin";
        break;
    case 4:
        $resultado = $temperatura - 273.15;
        echo $temperatura . " grados Kelvin = " . $resultado . " grados Celsiu";
        break;
    default:
        echo "Opción inválida";
}