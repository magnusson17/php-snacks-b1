<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 -->

<?php
$array = [];
$finalArray = [];

$rangeRandNum = 100;
$totElInFinalArray = 15;

// 1) 1o tentativo

// for ($i = 0; $i < 15; $i++) {
//     $rand = rand(1, 15);
//     if ( !in_array($rand, $array) ) {
//         $array[] = $rand;
//     } 
// }
// var_dump($array);

//USA IL WHILE!!!!
$arrayWhile = [];
while (count($arrayWhile) < 15) {
    $numero = rand(1, 15);
    if (!in_array($numero, $arrayWhile) == true) {
        $arrayWhile[] = $numero;
    };
};

var_dump($arrayWhile);

// 2) 2o tentativo

for ($i = 0; $i < $rangeRandNum; $i++) {
    $array[] = $i;
};
shuffle($array);
// var_dump($array);

for ($q = 0; $q < $totElInFinalArray; $q++) {
    $finalArray[] = $array[$q];
};
var_dump($finalArray);

?>