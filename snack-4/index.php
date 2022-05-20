<?php
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

//array vuoto
$array = [];
// ciclo per ottenere 15 numeri
while (count($array) < 15){
    // variabile per il numero random
    $number = rand(1, 100);
    // condizione per ottenere il numero unico e pusharlo nel array
    if (!in_array($number, $array)){
        array_push($array, $number);
    }
}
var_dump($array);
?>