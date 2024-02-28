<?php
// Funzione per generare la password
function generaPassword($lunghezza) {
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
    $lunghezzaCaratteri = strlen($caratteri);
    $password = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $password .= $caratteri[rand(0, $lunghezzaCaratteri - 1)];
    }
    return $password;
}
?>