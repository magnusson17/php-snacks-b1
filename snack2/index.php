<!-- 
## Snack 2

Passare come parametri GET name, mail e age
verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola 
e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

 -->

<?php
$name = ( isset($_GET['name']) ? $_GET['name'] : '');
$mail = ( isset($_GET['mail']) ? $_GET['mail'] : '');
$age = ( isset($_GET['age']) ? $_GET['age'] : '');
$risultato = '';
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

    <form method="GET">
        <input type="text" name="name" placeHolder="nome">
        <input type="mail" name="mail" placeHolder="mail">
        <input type="text" name="age" placeHolder="età">
        <button type="submit">avanti</button>
    </form>

    <p>
        <?php if( strlen($name) < 3 || !gettype($age) == 'number') {
            echo 'Accesso negato';
        } echo 'Accesso consentito'
        ?>
    </p>

</body>
</html>