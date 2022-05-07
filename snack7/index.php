<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php
$alunni = [
    [
        'nome' => 'ugo',
        'cognome' => 'foscolo',
        'voti' => [
            10,
            9,
            7
        ]
    ],
    [
        'nome' => 'giulio',
        'cognome' => 'cesare',
        'voti' => [
            8,
            9,
            10
        ]
    ],
    [
        'nome' => 'italo',
        'cognome' => 'calvino',
        'voti' => [
            7,
            9,
            7
        ]
    ],
];

var_dump($alunni);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div>
            <!-- <?php 
            for ($i = 0; $i < count($alunni); $i++) {
                $somma = 0;
                for ($v = 0; $v < count($alunni[$i]['voti']); $v++) {
                    $somma += $alunni[$i]['voti'][$v]; 
                };
                $media = round( ($somma / count($alunni[$i]['voti'])), 2 );
                echo $alunni[$i]['nome'] . " " . $alunni[$i]['cognome'] . ', media: ' . $media . "<br>";
            };
            ?> -->

            <?php 
            foreach ($alunni as $alunno) { 
            ?>

                <p>

                <?php 
                foreach ($alunno as $key => $item) { 
                    if($key == 'nome') {
                        echo $item . ", ";
                    }
                    if($key == 'cognome') {
                        echo $item . ", ";
                    }
                    if($key == 'voti') {
                        $sum = array_sum($item);
                        $media = round( ($sum / count($item)), 2 );
                        echo "media: " . $media;
                    } 
                };
                ?>

                </p>

            <?php
            };
            ?>
        </div>
    </body>
</html>