<?php
    $number = 5;
    $escape = "string型を使用するときに、ダブルクオート(\")を表示する場合は、バックスラッシュ(\)が必要です。";
    $string = 'I\'m Security Enginner';
    const GREETING = "こんばんは";
    $name = "太郎君";

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskDataType</title>
</head>
<body>
    <p><?php 
        echo("課題１<br/>りんごが{$number}個あります。"); ?></p>
    <p><?php 
        echo("課題２<br/>" . $escape); ?></p>
    <p><?php 
        echo("課題３<br/>" . $string); ?></p>
    <p><?php 
        echo("課題４<br/>" . GREETING . "、$name"); ?></p>
</body>
</html>
