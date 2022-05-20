<?php

// Passare come parametri GET name, mail e age 
// verificare(cercando i metodi che non conosciamo nella documentazione) 
// che name sia più lungo di 3 caratteri, 
// che mail contenga un punto e una chiocciola
// che age sia un numero
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

// creo le variabili verificando che se non ci sia nessun dato mi dia stringa vuota e non null
$name = isset($_GET['name']) ? $_GET['name'] : '';
$mail = isset($_GET['mail']) ? $_GET['mail'] : '';
$age = isset($_GET['age']) ? $_GET['age'] : '';
// var_dump($name, $mail, $age)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>

    
    <?php if (strlen($name) == 0 && strlen($mail) == 0 && strlen($age) == 0) {?>
        <h2>You need to log in!</h2>
    <?php } elseif(strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {?>
        <h2> <?="Access allowed!";?></h2>
    <?php } else {?>
        <h2> <?="Access denied!";?></h2>

        <!-- avviso l'utente che il nome inserito non abbia più di 3 caratteri -->
        <?php if (!empty($_GET['name']) && strlen($name) <= 3) {?>
            <b>"Name error!"</b> <span>Your name must have more then 3 characters</span>
        <?php;}?>

        <!-- avviso l'utente che l'email deve contenere un punto e una chiocciola -->
        <?php if (!empty($_GET['mail']) && !strpos($mail, '@') && !strpos($mail, '.')){?>
            <b>"Email error!"</b> <span>Your email must have "<b>@</b>" and "<b>.</b>"</span>
        <?php;}?>

        <!-- avviso l'utente che l'età deve contenere un numero -->
        <?php if (!empty($_GET['age']) && !is_numeric($age)){?>
            <b>"Age error!"</b> <span>Your age must be an "<b>internal number</b>"</span>
        <?php;}?>
        <?php }?>

    <p>Name <?=$name;?></p>
    <p>Email <?=$mail;?></p>
    <p>Age <?=$age;?></p>

</body>
</html>