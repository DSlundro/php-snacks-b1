<?php
## Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
// Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60


// creo un array con le partite

$arrayMatch = [
    [
        "id" => "1",
        "match" => "20/05/2022",
        "homeTeam" => "Olimpia Milano",
        "awayTeam" => "Cantù",
        "homePoints" => "55",
        "awayPoints" => "60",
    ],
    [
        "id" => "2",
        "match" => "16/05/2022",
        "homeTeam" => "Torino",
        "awayTeam" => "Venezia",
        "homePoints" => "75",
        "awayPoints" => "44",
    ],
    [
        "id" => "3",
        "match" => "13/05/2022",
        "homeTeam" => "Roma",
        "awayTeam" => "Firenze",
        "homePoints" => "64",
        "awayPoints" => "85",
    ],
    [
        "id" => "4",
        "match" => "14/05/2022",
        "homeTeam" => "Bari",
        "awayTeam" => "Palermo",
        "homePoints" => "89",
        "awayPoints" => "90",
    ],
];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    
    <h2>Match</h2>
        <?php for ($i = 0; $i < count($arrayMatch); $i++){ ?>
        <p>
            <?php
                echo $arrayMatch[$i]['homeTeam'] . " - " . $arrayMatch[$i]['awayTeam'] . " | " . $arrayMatch[$i]['homePoints'] . " - " . $arrayMatch[$i]['awayPoints'];
            ?>
        </p>
        <?php }?>
</body>
</html>