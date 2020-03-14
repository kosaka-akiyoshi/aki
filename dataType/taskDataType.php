<?php
    $number = 5;
    $escape = "string型を使用するときに、ダブルクオート(\")を表示する場合は、バックスラッシュ(\)が必要です。";
    $string = 'I\'m Security Enginner';
    const GREETING = "こんばんは";
    $name = "太郎くん";

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
    <p><?php echo("りんごが{$number}個あります。"); ?></p>
    <p><?php echo($escape); ?></p>
    <p><?php echo($string); ?></p>
    <p><?php echo(GREETING . "、$name"); ?></p>
</body>
</html>
