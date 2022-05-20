<?php
// Creare un array contenente qualche alunno di un’ipotetica classe. 
// Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
// Stampare Nome, Cognome e la media dei voti di ogni alunno.

$class = [
    [
        "nome" => "Mario",
        "cognome" => "Esposito",
        "voti" => [4,6,8,2,10,1],
    ],
    [
        "nome" => "Martina",
        "cognome" => "Verdi",
        "voti" => [5,2,6,7,3,6,8,4],
    ],
    [
        "nome" => "Elisa",
        "cognome" => "Rossi",
        "voti" => [8,3,8,4,7,8,9,10],
    ],
    [
        "nome" => "Marco",
        "cognome" => "Bianchi",
        "voti" => [1,7,2,5,7,3,5,6,6,],
    ],
    [
        "nome" => "Fablo",
        "cognome" => "Escobar",
        "voti" => [7,3,6,3,7,9,3,1],
    ],
];

// var_dump($class);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>
    
<?php
    for ($i = 0; $i < count($class); $i++){?>
    
    <h2><?=$class[$i]['nome'] . ' ' . $class[$i]['cognome'] . ' ' . round(array_sum($class[$i]['voti']) / count($class[$i]['voti']), 1)?></h2>
    
<?php }?>

</body>
</html>


