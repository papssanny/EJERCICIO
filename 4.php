<?php

$contador_pares = 0;
$contador_impares = 0;


echo "Los primeros 20 números pares son:\n";
echo "Los primeros 20 números impares son:\n";


for ($i = 1; $contador_pares < 20 || $contador_impares < 20; $i++) {
    
    if ($i % 2 == 0) {
        // Es un número par
        echo $i . " ";
        $contador_pares++;
    } else {
        // Es un número impar
        echo $i . " ";
        $contador_impares++;
    }
}
?>