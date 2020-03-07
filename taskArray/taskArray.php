<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskArray</title>
</head>
<body>
        <?php //task 1 - 1
            $averageSalaryArray = [
                2018 => 4410000,
                2017 => 4320000,
                2016 => 4220000,
                2015 => 4200000,
                2014 => 4150000
        ]; ?>
    <p>
        <?php 
            echo("<pre>");
            var_dump($averageSalaryArray);
            echo("</pre><br>");
            
        ?>
    </p>
        <?php //task 1 - 2 
            $allArray = array_sum($averageSalaryArray);
            $Array5 = $allArray / 5;
        ?>
    <p>
        <?php echo("過去五年間の平均年収は" . $Array5 . "です"); ?>
    </p>
    <?php //task 2 - 1
            $score = [
                'A' => 80,
                'B' => 55,
                'C' => 61,
                'D' => 76,
                'E' => 34,
                'F' => 93
        ]; ?>
    <p>
        <?php 
            echo("<pre>");
            var_dump($score);
            echo("</pre><br>");
        ?>
    </p>
    <?php //task 2 - 2 
            $allScore = array_sum($score);
            $alphabetScore = $allScore / 6;
        ?>
    <p>
        <?php
            echo("平均点は" . $alphabetScore . "です");
        ?>
    </p>
    
</body>
<body>
</body>
</html>
