<?php
function generateRandomPass($large = 8) {
    $LetraMAYU = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $Letraminu = 'abcdefghijklmnopqrstuvwxyz';
    $num = '0123456789';
    $signo = '!@#$%^&*()_+-=[]{}|;:,.<>?';

    $pass = $LetraMAYU . $Letraminu . $num . $signo;

    $password = '';
    for ($i = 0; $i < $large; $i++) {
        $password .= $pass[mt_rand(0, strlen($pass) - 1)];
    }

    return $password;
}

$passlarge = readline("ingresa la longitud de su contraseña: ");
$password = generateRandomPassword($passlarge);
echo "Su contraseña es: " . $password . "\n";
?>