<?php

    $fruits = [
        'りんご',
        'オレンジ',
        'ぶどう',
    ];

    $fruitstranslate = [
        'apple' => [
            'japanese' =>   'りんご',
            'price' => 80,
        ],
        'orange' => [
            'japanese' => 'オレンジ',
            'price' => 120,
        ],
        'grape' => [
            'japanese' => 'ぶどう',
            'price' => 220,
        ],
    ];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskLoop</title>
</head>
<body>
<p>
    <?php 
    foreach($fruits as $value){
        echo('$valueは' . $value . 'です。<br>');
        }
    ?>
</p>
<p>
    <?php 
    foreach($fruitstranslate as $key => $value){
        echo(
        '英語では' . $key . 'と表示され、
        日本語では' . $value['japanese'] . '、
        価格は' . $value['price' ] . '円です<br>'
        );
    } 
    ?>
</p>
</body>
</html>
