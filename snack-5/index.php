<?php
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
// Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt corporis, expedita doloremque molestias consequatur veniam libero tempora repellendus. Est recusandae non reiciendis minima magnam nostrum obcaecati nesciunt dicta blanditiis at.
Ut accusantium quod eius dolorem quos quidem ullam omnis libero, facere ea rerum, sequi vel velit dolore vitae, doloremque obcaecati praesentium maiores. Beatae veritatis culpa cum amet, reiciendis eius natus.
Perspiciatis assumenda deleniti debitis quas cupiditate enim omnis nisi totam rem, voluptate expedita atque praesentium quae! Nulla dolor architecto ducimus officia, qui dicta ipsa molestias at aut voluptatum aliquid voluptates.
Velit facere corrupti sunt. Asperiores reiciendis adipisci numquam quae quas mollitia voluptate atque rem, ipsam cum illum iure in vero voluptas tempora, autem debitis molestias magni expedita sunt repellat excepturi.
Itaque iste cupiditate ipsa minus sunt iure dolores ab voluptatum, eos voluptas provident? Delectus eius suscipit, consectetur, corporis assumenda officia tempore fuga numquam odit sint quisquam cumque natus reiciendis nesciunt.";

$newText = explode('.', $text);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    <h1>Text</h1>
    <?php foreach ($newText as $myText) :?>
        <p><?=$myText?></p>
    <?php endforeach;?>
</body>
</html>