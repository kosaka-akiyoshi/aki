<?php
    function divideQuarter(int $int1): float
    {
        $answer = $int1 / 4;
        return $answer;
    }

    function divideQuarterReference(int &$int2)
    {
        $int2 /= 4;
    }

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskHandOver</title>
</head>
<body>
<p>
<?php 
    $nisen = 2000;
    $answer = divideQuarter($nisen);
    echo($nisen."を4で割った値は".$answer."です。(値渡し)</br>");

    $hensu = 1000;
    divideQuarterReference($hensu);
    echo("1000を4で割った値は".$hensu."です。(参照渡し)");
?>
</p>
</body>
</html>
