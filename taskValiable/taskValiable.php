<?php
    $apple = 110;
    $orange = 80;
    const TAX = 0.1;
    $answer1 = $apple * 15;
    $answer2 = $orange * 12;
    $answer3 = $answer1 + $answer2;
    $answer4 = $answer3 + ($answer3 * TAX);
    $answer05 = $answer3 / (15 + 12);
    $answer5 = round($answer05, 0);
    ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskVariable</title>
</head>
<body>
<p><?php
            echo("answer1 = " .  $answer1); ?></p>
<p><?php
            echo("answer2 = " .  $answer2); ?></p>
<p><?php
            echo("answer3 = " .  $answer3); ?></p>
<p><?php
            echo("answer4 = " .  $answer4); ?></p>
<p><?php        
            echo("answer5 = " .  $answer5); ?></p>

</body>
</html>