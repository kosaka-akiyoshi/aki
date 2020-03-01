<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskCalc</title>
</head>
<body>
    <p><?php
        $number1 = 1;
        $number1 += 3; 
        $answer1 = $number1 * 5;
            echo("number1 = 1;　number1 += 3; answer1 = number1 * 5;<br/>");
            echo("answer1 = " .  $answer1); ?></p>
    <p><?php
        $number2 = 22;
        $number2 /= 3; 
        $answer2 = round($number2, 2);
            echo("number2 = 22; number2 /= 3; answer2 = round(number2, 2);<br/>");
            echo("answer2 = " .  $answer2); ?></p>
    <p><?php
        $answer3 = ceil($number2);
            echo("answer3 = ceil(number2);<br/>");
            echo("answer3 = " .  $answer3); ?></p>
    <p><?php
        $answer4 = floor($number2);
            echo("answer4 = floor(number2);<br/>");
            echo("answer4 = " .  $answer4); ?></p>
        <?php
        //サイコロを二つ降った時、統計が８になる組み合わせ(2,6)(3,5)(4,4)↓
        $number3 = (2/1)+(2/1)+(2/2);
        //サイコロを二つ降った時、起こりうる全ての組み合わせ↓
        $number4 = 6 * 6;
        //サイコロを二つ降った時、８になる確率↓
        $number5 = $number3 / $number4;
        //小数点第二位を四捨五入↓
        $answer5 = round($number5, 1 );
            echo("number3 = (2/1)+(2/1)+(2/2); number4 = 6 * 6;<br/>");
            echo("number5 = number3 / number4; answer5 = round(number5, 1 );<br/>");
            echo("answer5 = " .  $answer5); ?></p>  
</body>
</html>
