<?php

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
        $apple = 110;
        $answer1 = $apple * 15;
            echo("answer1 = " .  $answer1); ?></p>
<p><?php
        $orange = 80;
        $answer2 = $orange * 12;
            echo("answer2 = " .  $answer2); ?></p>
<p><?php
        $answer3 = $answer1 + $answer2;
            echo("answer3 = " .  $answer3); ?></p>
<p><?php
        const TAX = 0.1;
        $answer4 = $answer3 + ($answer3*TAX);
            echo("answer4 = " .  $answer4); ?></p>
<p><?php
        $answer05 = $answer3 / (15 + 12);
        $answer5 = round($answer05, 0);
            echo("answer5 = " .  $answer5); ?></p>

</body>
</html>