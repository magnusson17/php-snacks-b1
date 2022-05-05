<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 -->

<?php
$array = [];
for ($i = 0; $i < 15; $i++) {
    $rand = rand(1, 15);
    if ( !in_array($rand, $array) ) {
        $array[] = $rand;
    } 
    // come faccio a riempire comunque tutto l'array???
}

var_dump($array);
?>